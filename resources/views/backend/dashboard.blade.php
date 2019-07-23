@extends('layouts.backend')

@section('content')

    <article class="content dashboard-page">
        <section class="section">
            <div class="title-block">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="title"> GATES Assessment 2 </h3>
                        <p class="title-description"> Task Description </p>
                    </div>
                    <div class="col-md-4">
                        <a target="_blank" href="http://github.com/Zyten/gates-hrms"><h5 class="pull-right"> <i class="fa fa-github"> </i> Source </h5></a>
                    </div>
                </div>
            </div>
            <div class="row sameheight-container">
                <div class="col col-xs-12 col-sm-12 col-md-12 col-xl-12 case-study-col">
                    <div class="card case-study" data-exclude="xs">
                        <div class="card-block">
                            <div class="title-block">
                                <h4 class="title"> Case Study </h4>
                            </div>
                            <div class="row row-sm case-study-container">
                                <p>
                                    Dalam sesebuah organisasi, penting bagi pihak pengurusan untuk merekod permohonan cuti daripada staf. Bagi memenuhi keperluan organisasi, peserta latihan industri diminta untuk menyediakan satu aplikasi Permohonan Cuti secara dalam talian. Dengan adanya sistem ini, staf dikehendaki membuat permohonan cuti menerusi sistem. Sebelum mengisi permohonan, staf perlu log masuk ke dalam sistem. Maklumat cuti perlu disimpan di dalam pangkalan data dan ianya boleh diakses sekiranya perlu. Borang permohonan cuti adalah seperti di Lampiran 1.
                                </p>
                                <p>
                                    Permohonan cuti yang dihantar akan diterima oleh Penyelia untuk tujuan kelulusan. Jika Penyelia memberi kelulusan, jumlah cuti akan ditolak mengikut bilangan hari cuti yang diluluskan. Selain itu, Penyelia perlu log masuk ke dalam sistem dan dibenarkan untuk membuat paparan senarai permohonan cuti dan juga paparan permohonan cuti pekerja. Perincian paparan Penyelia adalah seperti di lampiran 2. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-xs-12 col-sm-12 col-md-12 col-xl-12 appendices-col">
                    <div class="card appendices" data-exclude="xs">
                        <div class="card-block">
                            <div class="title-block">
                                <h4 class="title"> Appendices </h4>
                            </div>
                            <div class="row row-sm appendices-container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <a title="Appendix 1 - Use Case" href="{{theme_path()}}/assets/appendix-1-use-case.png" target="_blank">
                                            <img alt="appendix-1-use-case" src="{{theme_path()}}/assets/appendix-1-use-case.png">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <a title="Appendix 2 - Application Form" href="{{theme_path()}}/assets/appendix-2-application-form.png" target="_blank">
                                            <img alt="appendix-2-application-form" src="{{theme_path()}}/assets/appendix-2-application-form.png">
                                        </a>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a title="Appendix 3 - Application List" href="{{theme_path()}}/assets/appendix-3-application-list.png" target="_blank">
                                            <img alt="appendix-3-application-list" src="{{theme_path()}}/assets/appendix-3-application-list.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
    </article>

@endsection
