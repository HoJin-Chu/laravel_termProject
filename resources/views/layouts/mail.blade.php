<aside class="sm-side">
                      <div class="user-head">
                          <a class="inbox-avatar" href="javascript:;">
                              <img  width="64" hieght="60" src="http://bootsnipp.com/img/avatars/ebeb306fd7ec11ab68cbcaa34282158bd80361a7.jpg">
                          </a>
                          <div class="user-name">
                              <h5><a href="#">Alireza Zare</a></h5>
                              <span><a href="#">Info.Ali.Pci@Gmail.com</a></span>
                          </div>

                      </div>
                        @include('layouts.writeModal')
                      </div>
                      <ul class="inbox-nav inbox-divider">
                        <li>
                              <a href="/recvMail"><i class="fa fa-envelope-o"></i>받은메일함 <span class="label label-danger pull-right">2</span></a>
                          </li>
                          <li>
                              <a href="{{route('sendMail')}}"><i class="fa fa-inbox"></i>보낸메일함</a>
                          </li>

                          <li>
                              <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                          </li>
                      </ul>
                      <div class="inbox-body text-center">
                          <div class="btn-group">
                              <a class="btn mini btn-primary" href="javascript:;">
                                  <i class="fa fa-plus"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-success" href="javascript:;">
                                  <i class="fa fa-phone"></i>
                              </a>
                          </div>
                          <div class="btn-group">
                              <a class="btn mini btn-info" href="javascript:;">
                                  <i class="fa fa-cog"></i>
                              </a>
                          </div>
                      </div>
                  </aside>
