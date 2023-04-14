@extends('template.master')
{{-- Trang chủ GIao Ban --}}
@section('title', 'Kho key UX/UI')
@section('content')
    @include('template.sidebar.sidebarMaster.sidebarLeft')
    <div id="mainWrap" class="mainWrap">
        <div class="mainSection">
            <div class="main">
                <div class="container-fluid">
                    <div class="mainSection_heading">
                        <h5 class="mainSection_heading-title">
                            Kho key UX/UI
                        </h5>
                        @include('template.components.sectionCard')
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="box_code-wrapper">
                                        <div class="box_code-item">
                                            <code>include('template.components.KeyIndex.elementCard', ['heading' => 'value', 'heading_mini' => 'value'])</code>
                                        </div>
                                        <div class="box_code-preview">
                                            @include('template.components.KeyIndex.elementCard', ['heading' => 'Tiêu đề', 'heading_mini' => 'tiêu đề con'])
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="box_code-wrapper">
                                        <div class="box_code-item">
                                            <code>include('template.components.sectionCard')</code>
                                        </div>
                                        <div class="box_code-preview">
                                            sdfg
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('template.footer.footer')
        </div>
    </div>
    @include('template.sidebar.sidebarMaster.sidebarRight')



@endsection
@section('footer-script')
   
    
    <script>
            document.addEventListener('DOMContentLoaded', function () {
                const select = document.getElementById('select');
                const chartContainers = document.querySelectorAll('.chart-container');

                select.addEventListener('change', function () {
                    chartContainers.forEach(function (container) {
                        container.style.display = 'none';
                    });

                    const selectedChartContainer = document.getElementById(select.value + 'Container');
                    selectedChartContainer.style.display = 'block';
                });
            });
    </script>


@endsection
