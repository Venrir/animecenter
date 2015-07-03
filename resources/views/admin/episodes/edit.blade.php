@extends('admin.index')
@section('content')
    <script>
        $(document).ready(function () {
            $(".set_date").click(function () {
                $(this).parent("div").parent("div").find("input[type='text']").val($(this).attr("val"));
            });
        });
    </script>
    <div class="bigTitle">Edit Episode</div>
    <form action="{{ url('admin/episodes/edit/' . $episode['id']) }}" method="post" enctype="multipart/form-data">

        {!! csrf_field() !!}

        <input name="c_date" value="<?php echo $episode['date']; ?>" type="hidden"/>

        <div class="inputNOption" style="width: 100%;">
            <div class="smallTitle">Title:</div>
            <input name="title" value="<?php echo $episode['title']; ?>"
                   type="text" class="textInput" style="width: 80%;"/>
        </div>
        <!--/inputNoption-->

        <div class="inputSelectarea">
            <div class="smallTitle">Series:</div>
            <select class="select" name="series">
                @foreach ($animes as $anime)
                    <option value="<?php echo $anime['id']; ?>" <?php
                            if ($episode['series'] == $anime['id']) {
                                echo "selected='selected'";
                            } ?>>
                        <?php echo $anime['title']; ?>
                    </option>
                @endforeach
            </select>
            <input name="" value="" type="text" class="textInput2"/>
        </div>
        <!--/inputSelectarea-->

        <div class="inputNOption" style="">
            <div class="smallTitle">
                Coming Date: <a href="#" class="prevBT set_date"
                val="<?php echo date('Y-m-d H:i:s', strtotime(date("Y-m-d H:i:s") . "+7 day")); ?>">
                    Set Date
                </a>
            </div>
            <input name="coming_date" value="<?php echo $episode['coming_date']; ?>" type="text" class="textInput"/>
        </div>
        <!--/inputNoption-->

        <div class="clear"></div>

        <div class="inputCheck">
            <input type="checkbox" class="checkbox" name="show" value="1" <?php
                if ($episode['show'] == 1) { echo "checked='checked'"; }
            ?>/>
            <span></span>
            <div class="smallTitle">Show in home page</div>
        </div>
        <!--/inputCheck-->

        <div class="inputCheck">
            <input type="checkbox" class="checkbox" name="reset" value="1"/>
            <span></span>
            <div class="smallTitle">Rest time</div>
        </div>
        <!--/inputCheck-->

        <div class="inputTextarea">
            <div class="smallTitle">Not Yet Aried Episode Info:</div>
            <textarea class="textarea" name="not_yet_aired">
                <?php echo $episode['not_yet_aired']; ?>
            </textarea>
        </div>
        <!--/inputTextarea-->

        <div class="inputTextarea">
            <div class="smallTitle">Mirror 1:</div>
            <textarea class="textarea" name="mirror1">
                <?php echo $episode['mirror1']; ?>
            </textarea>
        </div>
        <!--/inputTextarea-->

        <div class="inputTextarea">
            <div class="smallTitle">HD:</div>
            <textarea class="textarea" name="hd">
                <?php echo $episode['hd']; ?>
            </textarea>
        </div>
        <!--/inputTextarea-->

        <div class="inputTextarea">
            <div class="smallTitle">Mirror 2:</div>
            <textarea class="textarea" name="mirror2">
                <?php echo $episode['mirror2']; ?>
            </textarea>
        </div>
        <!--/inputTextarea-->

        <div class="inputTextarea">
            <div class="smallTitle">Mirror 3:</div>
            <textarea class="textarea" name="mirror3">
                <?php echo $episode['mirror3']; ?>
            </textarea>
        </div>
        <!--/inputTextarea-->

        <div class="inputTextarea">
            <div class="smallTitle">Mirror 4:</div>
            <textarea class="textarea" name="mirror4">
                <?php echo $episode['mirror4']; ?>
            </textarea>
        </div>
        <!--/inputTextarea-->

        <div class="inputTextarea">
            <div class="smallTitle">RAW:</div>
            <textarea class="textarea" name="raw">
                <?php echo $episode['raw']; ?>
            </textarea>
        </div>
        <!--/inputTextarea-->

        <div class="inputTextarea">
            <div>Backup - Use Mirror: 1 as primary.</div>
            <textarea class="textarea" name="subdub">
                <?php echo $episode['subdub']; ?>
            </textarea>
        </div>
        <!--/inputTextarea-->

        <div class="clear"></div>
        <input type="submit" id="submit" value="Update"/>

    </form>
@endsection