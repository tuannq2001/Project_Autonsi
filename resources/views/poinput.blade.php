@extends('app.layout')
@section('main-content')
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .dialog {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 1px solid #ccc;
        padding: 20px;
        background-color: white;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 60vw;
        z-index: 9999;
        height: auto
    }
    .dialog-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 999;
    }
</style>
                <main>
                    @error('failed')
            <div class="alert alert-danger">{{$message}}</div>
          @enderror
          @error('success')
          <div class="alert alert-success">{{$message}}</div>
         @enderror
                   <div class="container-fluid px-4">
                      <ul class="nav justify-content-end" style="margin-top:1vh">
                        <button id="openDialog" class="btn btn-outline-success my-2 my-sm-0" type="submit" style="margin-right: 10px;">Thêm</button>
                        <div id="dialogOverlay" class="dialog-overlay"></div>
                        <div id="dialog" class="dialog">
                            <button  style="float: right" id="closeDialog">X</button>
                            <h2 class="text-center">THÊM SẢN PHẨM</h2>
                            <form action="{{route('xl-them-san-pham')}}" method="post" role="form" class="contactForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã sản phẩm</label>
                                    <input type="text" class="form-control" id="code" name="productcode" placeholder="Mã sản phẩm">
                                  </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Tên sản phẩm</label>
                                  <input type="text" class="form-control" id="name" name="productname" placeholder="Tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Giá</label>
                                    <input type="number" class="form-control" id="price" name="productprice" placeholder="Giá">
                                  </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Ghi chú</label>
                                    <input type="text" class="form-control" id="description" name="productdescription"  placeholder="Ghi chú">
                                  </div>
                                <a href="{{route('tim-san-pham') }}"><button type="submit" class="btn btn-primary">Tạo</button></a>
                              </form>

                        </div>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </ul>
                   </div>
                   <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        DataTable Example
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                              @forelse($nhapkho as $nk)
                              <tr>
                                  <td>{{ $nk->POI_Code}}</td>
                                  <td>{{ $nk->POI_CreateDate}}</td>
                                  <td>{{ $nk->POI_Date}}</td>
                                  <td><a href="{{route('xoa-san-pham',['id' => $nk->POI_ID]) }}">Chi tiết </a><a href="{{route('xoa-san-pham',['id' => $nk->POI_ID]) }}">Xóa</a></td>
                              </tr>
                              @empty
                              @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                </main>
                <script>
                    const openDialogButton = document.getElementById('openDialog');
                    const closeDialogButton = document.getElementById('closeDialog');
                    const dialog = document.getElementById('dialog');
                    const dialogOverlay = document.getElementById('dialogOverlay');

                    openDialogButton.addEventListener('click', () => {
                        dialog.style.display = 'block';
                        dialogOverlay.style.display = 'block';
                    });

                    closeDialogButton.addEventListener('click', () => {
                        dialog.style.display = 'none';
                        dialogOverlay.style.display = 'none';
                    });

                    dialogOverlay.addEventListener('click', () => {
                        dialog.style.display = 'none';
                        dialogOverlay.style.display = 'none';
                    });
                </script>
                @endsection
