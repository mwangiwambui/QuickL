@extends('admin.layout.admin')
    @section('content')
        @can(isIndustry)
        <h3>Industry</h3>
        @endcan

        @can(isAdmin)
            <h3>Admin</h3>
        @endcan

    @endsection