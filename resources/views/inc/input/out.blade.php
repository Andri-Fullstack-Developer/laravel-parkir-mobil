
    <div class="bg-image-vertical h-100"
        style="background-color: #EFD3E4;
            background-image: url(https://mdbootstrap.com/img/Photos/new-templates/search-box/img1.jpg);
          ">
        <div class="mask d-flex align-items-center h-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="card" style="border-radius: 1rem;">
                            <div class="card-body p-5">

                                <h1 class="mb-3 text-center">Selamat Datang Diparkir Mobil</h1>

                                <form action="{{ route('out.store') }}" method="POST">
                                    @csrf
                                     {{-- @method(PUT) --}}
                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="pilihan">Pilih MALL</label>
                                        <select name="pilihan" class="form-control" id="pilihan">
                                            <option disabled>----</option>
                                            <option value="mall 1">MALL 1</option>
                                            <option value="mall 2">MALL 2</option>
                                            <option value="mall 3">MALL 3</option>
                                            <option value="mall 4">MALL 4</option>
                                        </select>
                                    </div>

                                    <!-- Text input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="Nplat">N.Plat</label>
                                        <input name="Nplat" type="text" id="Nplat" class="form-control" />
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="lantai">Lantai</label>
                                        <input name="lantai" type="text" id="lantai" class="form-control" />
                                    </div>

                                    <!-- Number input -->
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="nomerlantai">Nomer</label>
                                        <input name="nomerlantai" type="number" id="nomerlantai" class="form-control" />
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center mb-4">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form6Example8" checked />
                                        <label class="form-check-label" for="form6Example8"> Create an account? </label>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-secondary btn-rounded btn-block">Place
                                        order</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

