@extends('admin.layout.admin')
    @section('content')
        @can('isIndustry')

        <div class="app-content content">
          <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- Chart -->
        <div class="row match-height">
            <div class="col-12">
                <div class="">
                    <div id="gradient-line-chart1" class="height-250 GradientlineShadow1"></div>
                </div>
            </div>
        </div>
        
        @endcan

        @can('isAdmin')
            <h3>Admin</h3>
        @endcan

    @endsection
