@extends('layouts.admin_base')
@section('title', 'Dashboard')

@section('content')

<!--START - Grid of tablo statistics-->
<div class="element-wrapper">
    <h6 class="element-header">Dashboard</h6>
    <div class="element-content">
        <div class="tablo-with-chart">
        <div class="row">
            <div class="col-sm-12 col-xxl-12">
                <div class="tablos">
                    <div class="row mb-xl-2 mb-xxl-3">
                    <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                            <div class="value">{{ $countPages }}</div>
                            <div class="label">Pages</div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                            <div class="value">{{ $countNews }}</div>
                            <div class="label">News</div>
                        </a>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                            <div class="value">{{ $countKoordinatorSektor }}</div>
                            <div class="label">Koordinator Sektor</div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                            <div class="value">{{ $countPendetaJemaat }}</div>
                            <div class="label">Pendeta Jemaat</div>
                        </a>
                    </div>
                    <div class="col-sm-6">
                        <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                            <div class="value">{{ $countPHMJ }}</div>
                            <div class="label">PHMJ</div>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!--END - Grid of tablo statistics-->

@endsection