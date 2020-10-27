

<div id="changedPass" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="studenteditedataTitle" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="text-align: center;" align="center">
                                                            <h5 class="" style="text-align: center;">password Edite</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                    <form action="{{ route('profile_iPass_Change') }}" method="POST" id="password_edite">
                                                      @csrf
                                                   


                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Current Password</label>
                                                                    <input type="password" name="current_password" id="current_password" class="form-control @error('password') is-invalid @enderror" placeholder="password..">

                                                                      @error('password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                            <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">New Password</label>
                                                                    <input type="password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror" placeholder="new_password..">

                                                                     @error('new_password')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror
                                                                </div>
                                                            </div>
                                                        </div>

                                                          <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Re_Type Password</label>
                                                                    <input type="password" name="Re_password" id="Re_password" class="form-control" placeholder="Re_password..">
                                                                </div>
                                                            </div>
                                                        </div>


                                                     
                                               
                                                    <input type="hidden" name="profileId" value="{{ $us->id }}" id="profileId">





                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" id="reset" class="btn btn-warning waves-effect d-none" data-dismiss="modal">Reset</button>
                                                      <button type="submit" class="btn btn-success" >Submit</button>
                                                        
                                                    </div>

                                                </div>
                                                    </form>
                                            </div>
                                        </div>