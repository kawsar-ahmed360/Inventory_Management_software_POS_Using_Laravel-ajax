

<div id="editeImage" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="studenteditedataTitle" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="text-align: center;" align="center">
                                                            <h5 class="" style="text-align: center;">photo Edite</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                    <form action="{{ route('profile_image_Save') }}" method="POST" id="image_edite" enctype="multipart/form-data">
                                                      @csrf
                                                   


                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Image</label>
                                                                    <input type="file" name="photo" id="photo" class="form-control" placeholder="photo..">
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