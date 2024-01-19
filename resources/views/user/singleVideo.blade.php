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
                        src="https://rr1---sn-npoe7ndl.c.drive.google.com/videoplayback?expire=1705389351&ei=9wKmZbL-F6m1wN4P_vmcyAE&ip=2407:c00:6001:b77e:c4fb:816a:5407:c266&id=c034c240bf619ca3&itag=22&source=webdrive&requiressl=yes&xpc=EghonaK1InoBAQ==&mh=8m&mm=32&mn=sn-npoe7ndl&ms=su&mv=m&mvi=1&pl=34&ttl=transient&susc=dr&driveid=1XJ5XRPK-apkyDbOYksbaTKS4yPq4NjXu&app=explorer&eaua=WIug9EHVF8Q&mime=video/mp4&vprv=1&prv=1&dur=64.388&lmt=1705348862681583&mt=1705378121&subapp=DRIVE_WEB_FILE_VIEWER&txp=0006224&sparams=expire,ei,ip,id,itag,source,requiressl,xpc,ttl,susc,driveid,app,eaua,mime,vprv,prv,dur,lmt&sig=AJfQdSswRQIgG_NsBPYg6cHzHIInVuDk42aevPZWE7ruwt_OkXSu86wCIQD9GVf0lSF1yL7FeeSSuOTW-BT67nraEuPvkv-BTPeJfg==&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=AAO5W4owRAIgXaxH9voBGbZofSjouDhjW23juDfw1AzxoC9qpi0oQjMCIGZraYkpd992DVn5uamNIbjC1wOzUitNzc_rS-BcTRwb&cpn=lzTa3VX2ihbTug0N&c=WEB_EMBEDDED_PLAYER&cver=1.20240109.00.00"
                        type='video/mp4'>
                </video>
            </div>

        </div>
        <div class="px-2 mt-3">
            <h2 class="px-5">NECK PAIN GONE! Daily Stretches For Neck Tightness And Pain</h2>
        </div>
    </div>
@endsection
