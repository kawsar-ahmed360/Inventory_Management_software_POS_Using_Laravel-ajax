

<div id="add_category" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="studenteditedataTitle" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="text-align: center;" align="center">
                                                            <h5 class="" style="text-align: center;">Category ASdd</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                    <form action="{{ route('Savecategory') }}"  method="POST" id="addcategory">
                                                      @csrf
                                                   


                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="field-3" class="control-label">Category Name</label>
                                                                    <input type="text" name="name" id="name" class="form-control" placeholder="name..">
                                                                </div>
                                                            </div>
                                                        </div>


                                             
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="reset" id="reset" class="btn btn-warning waves-effect d-none" data-dismiss="modal">Reset</button>
                                                      <button type="submit" class="btn btn-success" >Submit</button>
                                                      <button type="reset" class="btn btn-warning" >reset</button>
                                                        
                                                    </div>

                                                </div>
                                                    </form>
                                            </div>
                                        </div>