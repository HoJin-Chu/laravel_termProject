<div class="inbox-body">
                          <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                              쪽지쓰기
                          </a>
                          <!-- Modal -->
                          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display:none;">
                              <div class="modal-dialog">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                      </div>
                                      <div class="modal-body">
                                          <form action="{{route('WriteSend')}}" role="form"  method="post" class="form-horizontal" enctype="multipart/form-data">
                                          @csrf
                                              <div class="form-group">
                                                  <label class="col-lg-6 control-label">받는사람</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" name="recv_id" id="inputEmail1" class="form-control" required>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-6 control-label">제목</label>
                                                  <div class="col-lg-10">
                                                      <input type="text" placeholder="" name="title" id="cc" class="form-control" required>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-lg-6 control-label">내용</label>
                                                  <div class="col-lg-10">
                                                      <textarea rows="10" cols="30" class="form-control" id="" name="content" required></textarea>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <div class="col-lg-offset-6 col-lg-10">
                                                      <!-- <span class="btn green fileinput-button">
                                                        <i class="fa fa-plus fa fa-white"></i>
                                                        <span>첨부파일</span>
                                                        <input type="file" name="files[]" multiple="">
                                                      </span> -->
                                                      <button class="btn btn-send" type="submit">보내기</button>
                                                  </div>
                                              </div>
                                          </form>
                                      </div>
                                  </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                          </div><!-- /.modal -->
