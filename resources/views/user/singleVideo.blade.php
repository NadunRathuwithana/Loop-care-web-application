@extends('layouts.master')

@section('styles')
    <style>
        body {
            background-image: url('assets/img/video-bg.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
@endsection

@section('content')
    @include('layouts.userNav')

    <div class="container px-0 hero-slider">

        <div class="d-flex justify-content-center mt-5">
            <div class="video-container">
                <video id="my-video" class="video-js" controls preload="auto"
                    poster="https://img.youtube.com/vi/Osd4DLpMNp4/maxresdefault.jpg" data-setup='' loop>
                    <source
                        src="https://rr2---sn-cvh76nlk.c.drive.google.com/videoplayback?expire=1705359914&ei=-Y-lZbiqPKaQ2LYPjYa9yAo&ip=111.223.176.45&id=c034c240bf619ca3&itag=22&source=webdrive&requiressl=yes&xpc=EghonaK1InoBAQ==&mh=8m&mm=32&mn=sn-cvh76nlk&ms=su&mv=m&mvi=2&pl=21&ttl=transient&susc=dr&driveid=1XJ5XRPK-apkyDbOYksbaTKS4yPq4NjXu&app=explorer&eaua=WIug9EHVF8Q&mime=video/mp4&vprv=1&prv=1&dur=64.388&lmt=1705348862681583&mt=1705348598&subapp=DRIVE_WEB_FILE_VIEWER&txp=0006224&sparams=expire,ei,ip,id,itag,source,requiressl,xpc,ttl,susc,driveid,app,eaua,mime,vprv,prv,dur,lmt&sig=AJfQdSswRgIhAM2fBhnEJarGo_LiNeN13gFe8aqxQZoHOOoecY1RZ0riAiEA1tCc1wgOc6lhuCcP0WuN0JdAzawjNQ9dsoG0UyGAdbQ=&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=AAO5W4owRQIhAJcqK2EjFozWhO4AsVORmVOhLR3XeeX8fgqAqm4RwviiAiAwCW7kM-BSF-hTqiNsjGUWdM8nbCPJdysHW8dn8IZA0A==&cpn=IXBrKEl3P08OHxgA&c=WEB_EMBEDDED_PLAYER&cver=1.20240109.00.00"
                        type='video/mp4'>
                </video>
            </div>

        </div>
        <div class="px-2 mt-3">
            <h2 class="px-5">NECK PAIN GONE! Daily Stretches For Neck Tightness And Pain</h2>
        </div>
    </div>
@endsection
