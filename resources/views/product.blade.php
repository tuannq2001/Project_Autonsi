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
                            <button  style="float: right" id="closeDialog">Close</button>
                            <h2>Thêm sản phẩm</h2>
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
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>

                        </div>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                          </form>
                        </ul>
                   </div>
                   <table class="table" style="margin-top:1vh">
                    <thead>
                      <tr>
                        <th scope="col">Mã Sản Phẩm</th>
                        <th scope="col">Tên Sản Phẩm</th>
                        <th scope="col">Giá</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse($sanpham as $sp)
                        <tr>
                            <td>{{ $sp->PRO_Code}}</td>
                            <td>{{ $sp->PRO_Name}}</td>
                            <td>{{ $sp->PRO_Price}}</td>
                            <td><a href="">Xem</a></td>
                            <td><a href="">Cập nhật</a></td>
                            <td><a href="{{route('xoa-san-pham',['id' => $sp->PRO_ID]) }}">Xóa</a></td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="2">Không có dữ liệu</td>
                        </tr>
                        @endforelse
                    </tbody>
                  </table>
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
