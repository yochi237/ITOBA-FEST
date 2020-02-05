@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">    
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftarkan Team Anda</div>
                    <div class="panel-body">
                        <a href="{{url('/BPregister')}}" class="btn btn-primary " role="button" style=" padding-right: 95px;">Bussines Plan</a>
                    </div>
                    <div class="panel-body">
                        <a href="{{url('/ROregister')}}" class="btn btn-primary" role="button" style="padding-right: 133px;">Robotic</a>
                    </div>
                    <div class="panel-body">
                        <a href="{{url('/Essregister')}}" class="btn btn-primary" role="button" style="padding-right: 145px;">Essay</a>
                    </div>
                    <div class="panel-body">
                        <a href="{{url('/UIregister')}}" class="btn btn-primary" role="button" style="padding-right: 140px;">UI/UX</a>
                    </div>
                    <div class="panel-body">
                        <a href="{{url('/CPregister')}}" class="btn btn-primary" role="button" style="width: 30px, height: 10px;">Competitive Programming</a>
                    </div>
                    <div class="panel-body">
                        <a href="{{url('/CTFregister')}}" class="btn btn-primary" role="button" style="padding-right: 75px;">Capture the Flag</a>
                    </div>
                </div>
            </div>
        </div>
    </div>           
    </div>
</div>

   
@endsection

<script text="text/javascript">
    function hideElem() {
        var lomba = document.getElementById("category");
        
        if(lomba.value==2 || lomba.value==3){
            var el = document.getElementsByClassName("opsional");
            for (var i = 0; i < el.length; i ++) {
                el[i].style.display = 'none';
            }
        }else{
            var el = document.getElementsByClassName("opsional");
            for (var i = 0; i < el.length; i ++) {
                el[i].style.display = 'inherit';
            }
        }
    }
</script>