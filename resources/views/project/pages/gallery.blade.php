@extends('project.pages.master')
@section('body')

    @include('project.include.bread-crumb')

    <!-- gallery start here -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                    <ul class="nav nav-tabs list-inline">
                        <li class="active">
                            <a href="#all" data-toggle="tab" aria-expanded="true">Organic <span>All</span></a>
                        </li>
                        <li class="">
                            <a href="#vegetables" data-toggle="tab" aria-expanded="false">Organic <span>Vegetables</span></a>
                        </li>
                        <li class="">
                            <a href="#fruits" data-toggle="tab" aria-expanded="false">Organic <span>Fruits</span></a>
                        </li>
                        <li class="">
                            <a href="#meats" data-toggle="tab" aria-expanded="false">Organic <span>Meats</span></a>
                        </li>
                        <li class="">
                            <a href="#foods" data-toggle="tab" aria-expanded="false">Organic <span>Dried Foods</span></a>
                        </li>
                        <li class="">
                            <a href="#juice" data-toggle="tab" aria-expanded="false">Organic <span>Juice</span></a>
                        </li>
                    </ul>
                    <div  class="tab-content">
                        <div class="tab-pane active" id="all">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/01.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/05.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/06.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/07.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/02.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/03.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/04.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/08.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="vegetables">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/02.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/03.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/04.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/08.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/05.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/06.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/07.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/01.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="fruits">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/01.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/05.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/06.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/07.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/')}}images/gallery/02.png" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/')}}images/gallery/03.png" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/04.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/08.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="meats">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/03.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/02.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/04.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/08.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/01.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/05.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/06.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/07.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="foods">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/01.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/05.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/06.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/07.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/02.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/03.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/04.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/08.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="juice">
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/04.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/02.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/03.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/08.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="box">
                                        <div class="image">
                                            <img src="{{URL::to('project/images/gallery/01.png')}}" alt="image" title="image" class="img-responsive" />
                                            <div class="hoverbox">
                                                <div class="show">
                                                    <i class="icon_zoom-in_alt"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/05.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/06.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 galery">
                                            <div class="box">
                                                <div class="image">
                                                    <img src="{{URL::to('project/images/gallery/07.png')}}" alt="image" title="image" class="img-responsive" />
                                                    <div class="hoverbox">
                                                        <div class="show">
                                                            <i class="icon_zoom-in_alt"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--pagination code start here-->
                    <ul class="list-inline pagination">
                        <li>
                            <span>Pages</span>
                        </li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li class="pull-right">
                            <a href="#" aria-label="Previous"><i class="arrow_left"></i></a>
                            <a href="#" aria-label="Next"><i class="arrow_right"></i></a>
                        </li>
                    </ul>
                    <!--pagination code end here-->
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="modal-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery end here -->

    @endsection