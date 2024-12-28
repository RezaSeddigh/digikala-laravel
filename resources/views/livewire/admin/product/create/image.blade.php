<div class="widget-content widget-content-area ecommerce-create-section mt-3">
    <div class="row">
        <div class="col-md-12">
            <label for="product-images">آپلود تصاویر محصول</label>
            <div class="multiple-file-upload">

                <div class="field-wrapper" x-data="{isUploading:false,progress:0 }"
                     x-on:livewire-upload-start="isUploading=true"
                     x-on:livewire-upload-finish="isUploading=false"
                     x-on:livewire-upload-error="isUploading=false"
                     x-on:livewire-upload-progress="progress=$event.detail.progress"
                >
                    <input class="form-control" type="file" wire:model="photos" multiple>
                    <div x-show="isUploading" class="progress mt-3 ltr">
                        <div class="progress-bar progress-bar-striped  bg-danger progress-bar-animated"
                             role="progressbar" x-bind:style="`width:${progress}%`" aria-valuenow="10"
                             aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
                @error('coverIndex')
                <div class="alert alert-light-danger alert-dismissible fade show border-0 mt-2"
                     role="alert"
                     wire:loading.remove>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <svg> ...</svg>
                    </button>
                    <strong></strong> {{$message}}.</button>
                </div>

                @enderror

            </div>
        </div>
    </div>
</div>

