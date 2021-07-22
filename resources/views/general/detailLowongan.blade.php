@extends('general.master')
@section('content')
<div class="mx-auto" style="height: 100px;">
</div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 img-detilLowongan">
                <img src="{{ asset('img/Logo.png') }}" alt="" >
                <div class="detil">
                    <h1 style="margin-top:">{{ $job->name | TimbangNganggur }}</h1>
                    <h1 class="namaPerusahaan">{{ $job->companies->name }} <span class="daerah"> - {{ $job->companies->regions->name }}</span></h2>
                    <p class="card-text"><i class="fas fa-coins"></i> {{ $job->salary }} </p>
                    <p class="card-text"><i class="fas fa-clock"></i>
                        @if ($job->type == 'full_time')
                            &nbsp;Full Time    
                        @endif
                        @if ($job->type == 'part_time')
                            &nbsp;Part Time    
                        @endif
                        @if ($job->type == 'internship')
                            &nbsp;Internship    
                        @endif
                        @if ($job->type == 'apprentice')
                            &nbsp;Apprentice    
                        @endif
                    </p>
                    <p>terakhir waktu diperbaharui(waktu)</p>
                </div>
            
                <div class="profilPerusahaan">
                    <h2>PROFIL PERUSAHAAN</h2>
                </div>
            
                <div class="container">
                    <div class="job-desc">
                        <h4>Job Description</h4>
                        <ul>
                            {{ $job->description }}
                        </ul>
                        <h4>Kualifikasi</h4>
                        @if ($job->qualification != "")
                        @foreach (explode(',', $job->qualification) as $job)
                        <ul>
                            <li>{{ $job }}</li>
                        </ul>
                        @endforeach
                        @endif
                        <div class="skill" >
                            <h4 style="display: inline-block;">Skill</h4>
                            @if (count($skillsJobs) != 0)
                                @foreach ($skillsJobs as $skillJob)
                                    <a href="#" class="isiSkill">{{ $skillJob->skills->name }}</a>
                                @endforeach
                            @else
                                Tidak memerlukan skill khusus
                            @endif
                        </div>
                </div>
                
                </div>
            </div>
    
            <div class="col-md-3">
                <h2 style="font-size: 14px; font-weight: bold;">LOWONGAN LAIN <br>DARI PERUSAHAAN INI</h2>
                <div class="Tersimpan">
                    <div class="row">
                        @foreach ($otherJobs as $otherJob)                
                            <div class="col">
                                <div class="card" style="width: 17rem;">
                                    <img src="{{ asset('img/Logo.png') }}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <p class="card-text"><i class="fas fa-user"></i> {{ $otherJob->name }} </p>
                                    <p class="card-text"><i class="fas fa-coins"></i> {{ $otherJob->salary }} </p>
                                    <p class="card-text"><i class="fas fa-clock"></i> 
                                        @if ($otherJob->type == 'full_time')
                                            &nbsp;Full Time    
                                        @endif
                                        @if ($otherJob->type == 'part_time')
                                            &nbsp;Part Time    
                                        @endif
                                        @if ($otherJob->type == 'internship')
                                            &nbsp;Internship    
                                        @endif
                                        @if ($otherJob->type == 'apprentice')
                                            &nbsp;Apprentice    
                                        @endif
                                    </p>
                                    <a href="{{ route('ayoMakaryo.show', ['id' => $otherJob->id]) }}" class="btn btn-primary">Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
    
    
        </div>
    </div>
    
    
@endsection