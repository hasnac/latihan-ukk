@extends('layout.template_ad')
@section('content')
<header class="mb-3">
    <a href="#" class="burger-btn d-block d-xl-none">
        <i class="bi bi-justify fs-3"></i>
    </a>
</header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
        <div class="col-12 col-md-6 order-md-1 order-last">
            <h3>Edit Data Blog</h3>
            
            
        </div>
        <div class="col-12 col-md-6 order-md-2 order-first">
            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">
                Form Validation
                </li>
                <li class="breadcrumb-item active" aria-current="page">Parsley</li>
            </ol>
            </nav>
        </div>
        </div>
    </div>

    <!-- // Basic multiple Column Form section start -->
    <section id="multiple-column-form">b
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Data Blog</h4>
                        
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form action="" method='' enctype="multipart/form-data" class="form" data-parsley-validate>
                                
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Judul</label>
                                            <input
                                                type="text"
                                                id="title"
                                                class="form-control"
                                                placeholder="First Name"
                                                name="title"
                                                data-parsley-required="true"
                                                value=""
                                            />
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-md-12 col-12">
                                        
                                        <label for="picture" class="form-label">Deskripsi</label>
                                        
                                        <div class="form-group with-title mb-3">
                                            <textarea class="form-control" id="" name=""  rows="3"></textarea>
                                            <label>Your Content</label>
                                        </div>
                                        
                                        
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Penulis</label>
                                            <input
                                                type="text"
                                                id="title"
                                                class="form-control"
                                                placeholder="First Name"
                                                name="title"
                                                data-parsley-required="true"
                                                value=""
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Penerbit</label>
                                            <input
                                                type="text"
                                                id="title"
                                                class="form-control"
                                                placeholder="First Name"
                                                name="title"
                                                data-parsley-required="true"
                                                value=""
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Tahun terbit</label>
                                            <input
                                                type="text"
                                                id="title"
                                                class="form-control"
                                                placeholder="First Name"
                                                name="title"
                                                data-parsley-required="true"
                                                value=""
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="picture" class="form-label">Picture</label>
                                                <img src="" alt=""
                                                    class="img-preview img-fluid mb-3 col-sm-10 d-block"
                                                    style="width: 450px; height: 280px;">
                                                <input type="hidden" name="oldImage" multiple value="">
                                           
                                                <img class="img-preview img-fluid mb-3 col-sm-10 d-block"
                                                    style="width: 450px; height: 280px;">
                                           
                                            <input class="form-control" type="file" id="picture" name="picture"
                                            onchange="previewImage()">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <div class="form-group mandatory">
                                            <label for="first-name-column" class="form-label">Stok</label>
                                            <input
                                                type="text"
                                                id="title"
                                                class="form-control"
                                                placeholder="First Name"
                                                name="title"
                                                data-parsley-required="true"
                                                value=""
                                            />
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-12">
                                        
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="" value="" >
                                                    <label class="form-check-label" for="status">
                                                        Draft
                                                    </label>
                                                </div>
                                            </li>
                                            <li class="d-inline-block me-2 mb-1">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="" id="" value="" >
                                                    <label class="form-check-label" for="status">
                                                        Publish
                                                    </label>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                        
                                        
                                    </div>                          
                                    <div class="col-md-12 col-12">
                                        <h6>Input group append</h6>
                                        <div class="input-group mb-3">
                                            <select class="form-select" id="keyword" name="keyword">
                                                <option selected>Open this select menu</option>
                                                    
                                                    <option value=""
                                                        >
                                                        
                                                    </option>
                                                
                                            </select>
                                            <label class="input-group-text" for="keyword">Keyword</label>
                                        </div>
                                    </div>
                                </div>  
                                <div class="row">
                                    <div class="col-12 d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary me-1 mb-1">
                                        Submit
                                        </button>
                                        <a href='' class="btn btn-secondary">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic multiple Column Form section end -->
</div>
@endsection