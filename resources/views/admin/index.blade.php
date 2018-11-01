@extends('admin.layout.admin')
    @section('content')
        @can('isIndustry')

        <div class="app-content content">
          <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
            </div>

          </div>
        </div>
        
        @endcan

        @can('isAdmin')
            <h3>Admin</h3>
        @endcan


    @endsection

