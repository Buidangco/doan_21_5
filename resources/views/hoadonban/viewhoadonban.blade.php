 <div class="modal-dialog" role="document">
                                <div class="modal-content" style="margin-top: 80%;margin-left: -45%;opacity: 1;width: 259%;height: 500px;overflow: scroll;">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Sản phẩm</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true" onclick="tatmodal()">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                    <table class="table table-bordered">
                                       <thead>
                                            <tr style="background: #BDB76B">
                                                <th style="padding: 16px;    font-size: 15px;color: black;">STT</th>
                                                <th style="padding: 16px;    font-size: 15px;color: black;">Hình ảnh</th>
                                                <th style="padding: 16px;    font-size: 15px;color: black;">Mã khách hàng</th>
                                                <th style="padding: 16px;    font-size: 15px;color: black;">Tên sản phẩm</th>
                                                <th style="padding: 16px;    font-size: 15px;color: black;">Số lượng</th>
                                                <th style="padding: 16px;    font-size: 15px;color: black;">Tổng giá</th>
                                            </tr>
                                        </thead>
                                      @foreach($data1 as $row)
                                      <tr class="active">
                                        <td>{{$i++}}</td>
                                        <td><img style="width: 50px;height: 50px" src="{{url('storage/photos/1')}}/{{$row->image}}" alt="user" class="rounded" width="45"></td>
                                           <td>{{$row->maKh}}</td>
                                          <td>{{$row->name}}</td>
                                          <td>{{$row->soluong}}</td>
                                          <td>{{$row->Gia}}</td>
                                          <!-- <td>thehalftheart@mail.com</td>
                                          <td>192 Hầm tử</td> -->
                                      </tr>
                                      @endforeach
                                    </table>
                                  </div>
                                </div>
                              </div>