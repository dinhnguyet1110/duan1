
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">THÊM MỚI Khung Giờ Chiếu</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Khung Giờ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md">
                        <form action="index.php?act=add_khunggio" method="post">
                            <div class="card">
                                <div class="card-body">
                                
                                        <div class="form-group m-t-20">
                                        <label for="hue-demo">Mã khung giờ</label>
                                        <input type="text" id="magio" class="form-control demo" name="magio" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="hue-demo">Tên giờ</label>
                                            <input type="text" id="tengio" class="form-control demo" name="tengio">
                                        </div>
                                
                                </div>
                            </div>
                          
                            <input type="submit"  class="btn btn-success" name="themmoi" value="Thêm mới">
                            <input type="reset"  class="btn btn-primary" name="nhaplai" value="Nhập lại">
                            
                            <a href="index.php?act=list_khunggio"><input type="button" class="btn btn-info" value="Danh sách" name="list_khunggio"></a>              
                        </form>
                    </div>
                </div>

            </div>
