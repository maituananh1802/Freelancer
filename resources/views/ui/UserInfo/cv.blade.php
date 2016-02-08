@extends('ui.userinfo.cv_layout')
@section('content')
<style type="text/css" media="screen">

</style>
<form action="/cv/saveCV" method="post" id="cv_form" name="cv_form">
    <button type="submit" id="savecv" class="btn btn-primary" style="float:right;margin-bottom:5%">Lưu CV</button>
    {!! csrf_field() !!}
    <div id="cv" class="instaFade">
        <div class="mainDetails">
            <div id="headshot" class="quickFade">
                <img src="/images/headshot.jpg"/>
            </div>

            <div id="name">
                <h1 class="quickFade delayTwo" contenteditable id="username" name="name" style="margin-bottom:20px">Họ Tên</h1>
                <h2 contenteditable id="job_name" name="job_name" class="quickFade delayThree">Công Việc
                </h2>
            </div>

            <div id="contactDetails" class="quickFade delayFour">
                <ul>
                    <li>Email: <a href="#" contenteditable id="email" name="email">abc@yahoo.com</a></li>
                    <li>Địa Chỉ: <a href="#" contenteditable id="address" name="address">TP Hồ Chí Minh</a></li>
                    <li>Số Điên Thoại: <a href="#" contenteditable id="phone" name="phone"> 01234567890</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>

        <div id="mainArea" class="quickFade delayFive">
            <section style="margin-bottom:10px">
                <article>
                    <div class="sectionTitle">
                        <h1>Giới thiệu bản thân</h1>
                    </div>

                    <div class="sectionContent" contenteditable >
                        <div class="capabilities" name="capabilities">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</div>
                    </div>
                </article>
                <div class="clear"></div>
            </section>


            <section>
                <div class="sectionTitle">
                    <h1>Kinh Nghiệm Làm Việc</h1>
                </div>

                <div class="sectionContent">
                    <article class="experience">
                        <h2 contenteditable>Job Title at Company</h2>
                        <div class="subDetails" contenteditable>April 2011 - Present</div>
                        <div contenteditable>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</div>
                    </article>
                </div>
                <div class="clear"></div>
            </section>

            <section>
                <div class="sectionTitle">
                    <h1>Học Tập</h1>
                </div>

                <div class="sectionContent">
                    <article class="education">
                        <h2 contenteditable>College/University</h2>
                        <div class="subDetails" contenteditable>JAN 2013 - DEC 2013</div>
                        <div contenteditable>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim.</div>
                    </article>
                </div>
                <div class="clear"></div>
            </section>

            <section>
                <div class="sectionTitle">
                    <h1>Kỹ năng</h1>
                </div>

                <div class="sectionContent" id="skill">
                    <span contenteditable>-PHP</span>
                    <input class="rating" data-show-clear="false" data-show-caption="true" data-size="xs" data-show-caption="true" data-step="1">
                    <span contenteditable>-PHP</span>
                    <input class="rating" data-show-clear="false" data-show-caption="true" data-size="xs" data-show-caption="true" data-step="1">
                </div>
                <div class="clear"></div>
            </section>

            <section>
                <div class="sectionTitle">
                    <h1>Sở Thích</h1>
                </div>

                <div class="sectionContent">
                    <article class="interests">
                        <p contenteditable>-Art &amp; Multimedia</p>
                        <p contenteditable>-Art &amp; Multimedia</p>
                        <p contenteditable>-Art &amp; Multimedia</p>
                    </article>

                    
                </div>
                <div class="clear"></div>
            </section>

            <section>
                <div class="sectionTitle">
                    <h1>Hoạt Động Cá Nhân</h1>
                </div>

                <div class="sectionContent">
                    <article class="activities">
                        <p contenteditable>-Art &amp; Multimedia</p>
                        <p contenteditable>-Art &amp; Multimedia</p>
                    </article>

                    
                </div>
                <div class="clear"></div>
            </section>


        </div>
    </div>
</form>
@stop