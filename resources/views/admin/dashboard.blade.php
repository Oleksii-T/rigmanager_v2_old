@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>Users <span class="font-weight-bold">150</span></h3>
                    <p class="mb-0">Last day: <span class="font-weight-bold">150</span></p>
                    <p class="mb-0">Last week: <span class="font-weight-bold">150</span></p>
                    <p class="mb-0">Subscribed: <span class="font-weight-bold">150</span></p>
                    <p class="mb-0">Official: <span class="font-weight-bold">150</span></p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>Posts <span class="font-weight-bold">150</span></h3>
                    <p class="mb-0">Deactived: <span class="font-weight-bold">150</span></p>
                    <p class="mb-0">Last day: <span class="font-weight-bold">150</span></p>
                    <p class="mb-0">Last week: <span class="font-weight-bold">150</span></p>
                    <p class="mb-0">Equipment: <span class="font-weight-bold">150</span></p>
                    <p class="mb-0">Service: <span class="font-weight-bold">150</span></p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>Mailers <span class="font-weight-bold">150</span></h3>
                    <p class="mb-0">Deactived: <span class="font-weight-bold">150</span></p>
                    <p class="mb-0">Last day: <span class="font-weight-bold">150</span></p>
                    <p class="mb-0">Last week: <span class="font-weight-bold">150</span></p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>Messages <span class="font-weight-bold">150</span></h3>
                    <p class="mb-0">Unread: <span class="font-weight-bold">150</span></p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Online Store Visitors</h3>
                        <a href="javascript:void(0);">View Report</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex">
                        <p class="d-flex flex-column">
                            <span class="text-bold text-lg">820</span>
                            <span>Visitors Over Time</span>
                        </p>
                        <p class="ml-auto d-flex flex-column text-right">
                            <span class="text-success">
                                <i class="fas fa-arrow-up"></i> 12.5%
                            </span>
                            <span class="text-muted">Since last week</span>
                        </p>
                    </div>
                    <div class="position-relative mb-4"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="visitors-chart" height="200" width="454" class="chartjs-render-monitor" style="display: block; width: 454px; height: 200px;"></canvas>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <span class="mr-2">
                            <i class="fas fa-square text-primary"></i> This Week
                        </span>
                        <span>
                            <i class="fas fa-square text-gray"></i> Last Week
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
        </div>
    </div>
@stop