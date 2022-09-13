<div class="card">
    <div class="card-header bg-light">      
        <div class="container-fluid row p-9" style="font-size: 14px;">      
            <div class="from-group">            
                    <div class="body" ><label for="">Pilih Guru :</label> 
                        <select name="guru_id"> 
                            @if(!empty(@$data->guru_id))
                                <option value="{{@$data->guru_id}}" {{!empty($data->name)?'selected':''}}>{{$data->name}}</option>
                            @endif
                            @foreach($staff as $s)
                                <option value="{{$s->id}}">{{$s->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <div class="pertanyaan1">
                        <label for="quisioner">
                            bagaimana guru ini point 1
                        </label>
                        <div class="form-check">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point1" id="point1" value="10">
                                <label for="point1" class="form-check-label">
                                    cukup
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point1" id="point1" value="15">
                                <label for="point1" class="form-check-label">
                                    baik
                                </label> 
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point1" id="point1" value="20">
                                <label for="point1" class="form-check-label">
                                    sangat baik
                                </label> 
                            </div>
                    </div>
                    <hr>
                    <div class="pertanyaan2">
                        <label for="quisioner">
                            bagaimana guru ini point 2
                        </label>
                        <div class="form-check">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point2" id="point2" value="10">
                                <label for="point2" class="form-check-label">
                                    cukup
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point2" id="point2" value="15">
                                <label for="point2" class="form-check-label">
                                    baik
                                </label> 
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point2" id="point2" value="20">
                                <label for="point2" class="form-check-label">
                                    sangat baik
                                </label> 
                            </div>
                    </div>
                    <hr>
                    <div class="pertanyaan1">
                        <label for="quisioner">
                            bagaimana guru ini point 3
                        </label>
                        <div class="form-check">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point3" id="point3" value="10">
                                <label for="point3" class="form-check-label">
                                    cukup
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline" >
                                <input type="radio" class="form-check-input" name="point3" id="point3" value="15">
                                <label for="point3" class="form-check-label">
                                    baik
                                </label> 
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point3" id="point3" value="20">
                                <label for="point3" class="form-check-label">
                                    sangat baik
                                </label> 
                            </div>
                    </div>
                    <hr>
                    <div class="pertanyaan1">
                        <label for="quisioner">
                            bagaimana guru ini point 4
                        </label>
                        <div class="form-check">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point4" id="point4" value="10">
                                <label for="point4" class="form-check-label">
                                    cukup
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point4" id="point4" value="15">
                                <label for="point4" class="form-check-label">
                                    baik
                                </label> 
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point4" id="point4" value="20">
                                <label for="point4" class="form-check-label">
                                    sangat baik
                                </label> 
                            </div>
                    </div>
                    <hr>
                    <div class="pertanyaan1">
                        <label for="quisioner">
                            bagaimana guru ini point 5
                        </label>
                        <div class="form-check">
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point5" id="point5" value="10">
                                <label for="point5" class="form-check-label">
                                    cukup
                                </label>
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point5" id="point5" value="15">
                                <label for="point5" class="form-check-label">
                                    baik
                                </label> 
                            </div>
                            <div class="custom-control custom-checkbox custom-control-inline">
                                <input type="radio" class="form-check-input" name="point5" id="point5" value="20">
                                <label for="point5" class="form-check-label">
                                    sangat baik
                                </label> 
                            </div>
                    </div>
                   <hr>     
                    
                    
                    <div class="form-group row">
                        <label class="col-md-4 col-xs-4 col-form-label justify-flex-end">Masukan <span class="text-danger">*</span></label> 
                        <div class="col-12 col-md-7 col-lg-9">
                            <textarea name="masukan" class="form-control @error('masukan') is-invalid @enderror" placeholder="Masukan saran anda..">{{ old('masukan', $quisioner->masukan ?? '') }}</textarea>
                            @error('masukan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('masukan') }}</strong>
                                </span>
                            @enderror
                        </div> 
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary mr-1"><i class="fas fa-check-double mr-1"></i> SELESAI</button> 
        </div>
    </section>
</div>

