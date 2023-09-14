<main>

    @if(count($articles)!=0)
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-5">
                <!--begin::Table head-->
                <thead>
                <tr>
                    <th class="p-0 w-20px" style="border: none">#</th>
                    <th class="p-0 w-50px" style="border: none">Article Title</th>
                    <th class="p-0 w-50px" style="border: none">Article Image</th>
                    <th class="p-0 w-50px" style="border: none">Article Status</th>
                    <th class="p-0 w-50px" style="border: none">Created At</th>
                    <th class="p-0 w-50px" style="border: none">Actions</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <th style="text-align: center">
                            <div class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                {{$loop->iteration}}
                            </div>
                        </th>
                        <td style="text-align: center">
                            <div style="text-align: start"
                                 class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                @if(lang()=='en')
                                    {!!isset($article->getTranslations('title', ['en'])['en']) ? $article->getTranslations('title', ['en'])['en'] : "<span style='color: #ff0000'>No Title in English!</span>"!!}
                                @else
                                    {{$article->title}}
                                @endif
                            </div>
                        </td>
                        <td style="text-align: center">
                            <div style="text-align: start"
                                 class="text-dark fw-bolder text-hover-primary mb-1 fs-6 circle-shape">
                                @if(isset($article->getMedia('articles_images')[0]))
                                    <img style="border-radius: 50%" class="w-50px h-50px"
                                         src="{{$article->getMedia('articles_images')[0]->getUrl()}}"/>
                                @else
                                    <img style="border-radius: 50%" class="w-50px h-50px"
                                         src="{{asset('site/logo.png')}}"/>
                                @endif
                            </div>
                        </td>
                        <td style="text-align: center">
                            <div style="text-align: start"
                                 class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                {{$article->status==\App\Models\Article::STATUS_ACTIVE?'Active':'Inactive'}}
                            </div>
                        </td>
                        <td style="text-align: center">
                            <div style="text-align: start"
                                 class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                {{$article->created_at}}
                            </div>
                        </td>
                        <td style="text-align: center">
                            <div style="display: flex;gap: 5px">
                                <div style="text-align: start" class="text-dark fw-bolder mb-1 fs-6">
                                    <button
                                        wire:click="viewArticle({{ $article->id }})"
                                        class="btn btn-sm btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#view_article"
                                        role="button"><i style="padding: 0" class="bi bi-eye-fill"></i></button>
                                </div>
                                <div style="text-align: start" class="text-dark fw-bolder mb-1 fs-6">
                                    <button
                                        wire:click="edit({{ $article->id }})"
                                        class="btn btn-sm btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#edit_article"
                                        role="button"><i class="bi bi-pencil-square"
                                                         style="padding: 0"></i></button>
                                </div>
                                <div style="text-align: start" class="text-dark fw-bolder  mb-1 fs-6">
                                    <button
                                        wire:click="delete({{ $article->id }})"
                                        class="btn btn-sm btn-danger"
                                        data-bs-toggle="modal"
                                        data-bs-target="#delete_article"
                                        role="button"><i
                                            style="padding: 0" class="bi bi-trash-fill"></i></button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->

        </div>
    @else
        <div>There is No Articles Yet!</div>
    @endif

    <!--begin::Modal - Create Api Key-->
    <div wire:ignore.self class="modal fade" id="create_article" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_create_api_key_header">
                    <!--begin::Modal title-->
                    <h2>Create Article</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" wire:click="resetValues()"
                         data-bs-dismiss="modal">

                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)"
                                          fill="black"/>
                                </svg>
                            </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Form-->
                <form wire:submit.prevent="store" id="kt_modal_edit_card" class="form" enctype="multipart/form-data">
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true"
                             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_create_api_key_header"
                             data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll" data-kt-scroll-offset="300px">
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Article Title (AR)</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid"
                                       style="text-align: right;direction: rtl"
                                       placeholder="عنوان المقال" wire:model="title"/>
                                <!--end::Input-->
                                @error('title')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold mb-2">Article Title (EN)</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid"
                                       placeholder="Your Article Title" wire:model="title_en"/>
                                <!--end::Input-->
                                @error('title_en')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Article Content (AR)</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid" wire:model="content" rows="5"
                                          style="text-align: right;direction: rtl"
                                          placeholder="محتوى المقال"></textarea>
                                <!--end::Input-->
                                @error('content')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold mb-2">Article Content (EN)</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid" wire:model="content_en" rows="5"
                                          placeholder="Your Article Content"></textarea>
                                <!--end::Input-->
                                @error('content_en')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold mb-2">Article Image</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" wire:model="image" class="form-control form-control-solid"
                                       accept="image/*"
                                       placeholder="Your Article Images" name="image" value="{{old('image')}}"/>
                                <!--end::Input-->
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    {{--                <button wire:target="storePostData" >Subm</button>--}}
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_create_api_key_cancel" class="btn btn-light me-3">Discard
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" wire:target="store" :disabled="$disabled" class="btn btn-primary">
                            <span class="indicator-label">Create</span>
                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>

                <!--end::Form-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create Api Key-->
    <!--begin::Modal - Create Api Key-->
    <div wire:ignore.self class="modal fade" id="view_article" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_create_api_key_header">
                    <!--begin::Modal title-->
                    {{--                    @dd($view_article_title)--}}
                    <h2>Article | <span
                            style="color: {{$status==\App\Models\Article::STATUS_ACTIVE?'#00ff00':'#ff0000'}}">{{$view_article_title}}</span>
                    </h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" model:click="closeView()"
                         data-bs-dismiss="modal">

                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)"
                                          fill="black"/>
                                </svg>
                            </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <div class="d-flex justify-content-center align-center">
                    <img style="border-radius: 10px" class="w-300px h-300px m-4"
                         src="{{$view_article_image}}"/></div>
                <div class="table-responsive p-10">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-5">
                        <!--begin::Table head-->
                        <thead style="border: none">
                        <tr>
                            <th class="p-0 w-50px" style="border: none"></th>
                            <th class="p-0 w-50px" style="border: none"></th>
                        </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                        <tr>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    Title (AR):
                                </div>
                            </td>
                            <td style="text-align: center">
                                <div style="text-align: right;direction: rtl"
                                     class="text-dark rtl fw-bolder text-hover-primary mb-1 fs-6">
                                    {{$view_article_title}}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    Title (EN):
                                </div>
                            </td>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    {{$view_article_title_en}}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    Content (AR):
                                </div>
                            </td>
                            <td style="text-align: center">
                                <div style="text-align: right;direction: rtl"
                                     class="text-dark rtl fw-bolder text-hover-primary mb-1 fs-6">
                                    {{$view_article_content}}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    Content (EN):
                                </div>
                            </td>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    {{$view_article_content_en}}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    Status:
                                </div>
                            </td>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                     <span
                                         style="color: {{$status==\App\Models\Article::STATUS_ACTIVE?'#00ff00':'#ff0000'}}">
                                    {{$view_article_status==\App\Models\Article::STATUS_ACTIVE?'Active':'Inactive'}}</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    Created At:
                                </div>
                            </td>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    {{$view_article_created}}
                                </div>
                            </td>
                        </tr>

                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->


                </div>
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create Api Key-->
    <!--begin::Modal - Edit article-->
    <div
        wire:ignore.self
        class="modal fade"
        id="edit_article" tabindex="-1"
        aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Edit Article | <span
                            style="color: {{$status==\App\Models\Article::STATUS_ACTIVE?'#00ff00':'#ff0000'}}">{{$edit_article_title}}</span>
                    </h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div
                        class="btn btn-sm btn-icon btn-active-color-primary"
                        wire:click="resetValues()"
                        data-bs-dismiss="modal" id="cl">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                             <svg xmlns="http://www.w3.org/2000/svg"
                                  width="24" height="24"
                                  viewBox="0 0 24 24" fill="none">
                                 <rect opacity="0.5" x="6"
                                       y="17.3137" width="16"
                                       height="2" rx="1"
                                       transform="rotate(-45 6 17.3137)"
                                       fill="black"/>
                                 <rect x="7.41422" y="6"
                                       width="16" height="2"
                                       rx="1"
                                       transform="rotate(45 7.41422 6)"
                                       fill="black"/>
                             </svg>
                         </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <!--begin::Form-->
                <form wire:submit.prevent="update" id="kt_modal_edit_card" class="form" enctype="multipart/form-data">
                    <!--begin::Modal body-->
                    <div class="modal-body py-10 px-lg-17">
                        <!--begin::Scroll-->
                        <div class="scroll-y me-n7 pe-7" id="kt_modal_create_api_key_scroll" data-kt-scroll="true"
                             data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                             data-kt-scroll-dependencies="#kt_modal_create_api_key_header"
                             data-kt-scroll-wrappers="#kt_modal_create_api_key_scroll"
                             data-kt-scroll-offset="300px">
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Article Title (AR)</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" wire:model="title" class="form-control form-control-solid"
                                       style="text-align: right;direction: rtl"
                                       placeholder="عنوان المقال" name="title"/>
                                @error('title')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-bold mb-2">Article Title (EN)</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="text" wire:model="title_en" class="form-control form-control-solid"
                                       placeholder="Your Article Title" name="title_en"/>
                                @error('title_en')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Article Content (AR)</label>
                                <!--end::Label-->
                                <textarea class="form-control form-control-solid" wire:model="content" rows="5"
                                          style="text-align: right;direction: rtl"
                                          placeholder="محتوى المقال"></textarea>
                                @error('content')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class=" fs-5 fw-bold mb-2">Article Content (EN)</label>
                                <!--end::Label-->
                                <textarea class="form-control form-control-solid" wire:model="content_en" rows="5"
                                          placeholder="Your Article Content"></textarea>
                                @error('content_en')
                                <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                                @enderror
                                <!--end::Input-->
                            </div>
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-10 fv-row">
                                <!--begin::Label-->
                                <label class="required fs-5 fw-bold mb-2">Status</label>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select name="status" data-hide-search="true" wire:model="status"
                                        data-placeholder="Select a Status..." class="form-select form-select-solid">
                                    <option disabled>Select a Status...</option>
                                    <option value="{{\App\Models\Article::STATUS_ACTIVE}}"
                                            style="background-color: #00ff00">Active
                                    </option>
                                    <option value="{{\App\Models\Article::STATUS_INACTIVE}}"
                                            style="background-color: #ff0000">Inactive
                                    </option>
                                </select>
                                <!--end::Select-->
                                @error('status')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Input group-->
                            <div class="d-flex justify-content-center align-center">
                                <img style="border-radius: 10px" class="w-200px h-200px m-4"
                                     src="{{$edit_article_image}}"/></div>
                            <!--begin::Input group-->
                            <div class="mb-5 fv-row">
                                <!--begin::Label-->
                                <label class="fs-5 fw-bold mb-2">Article Image</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input type="file" wire:model="image" class="form-control form-control-solid"
                                       accept="image/*"
                                       placeholder="Your Article Images" name="image" value="{{old('image')}}"/>
                                <!--end::Input-->
                                @error('image')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Scroll-->
                    </div>
                    <!--end::Modal body-->
                    <!--begin::Modal footer-->
                    <div class="modal-footer flex-center">
                        <!--begin::Button-->
                        <button type="reset" id="kt_modal_create_api_key_cancel" class="btn btn-light me-3">Discard
                        </button>
                        <!--end::Button-->
                        <!--begin::Button-->
                        <button type="submit" wire:target="update" :disabled="$disabled" class="btn btn-primary">
                            <span class="indicator-label">Update</span>
                            <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                        <!--end::Button-->
                    </div>
                    <!--end::Modal footer-->
                </form>
                <!--end::Actions-->
            </div>
        </div>
        <!--end::Form-->
        <!--end::Modal body-->
    </div>
    <!--end::Modal - Edit article-->
    <div wire:ignore.self class="modal fade" id="delete_article" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">

                <div style="text-align: right">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" wire:click="resetValues()"
                         data-bs-dismiss="modal">

                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                          transform="rotate(-45 6 17.3137)" fill="black"/>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                          transform="rotate(45 7.41422 6)"
                                          fill="black"/>
                                </svg>
                            </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_create_api_key_header">
                    <!--begin::Modal title-->
                    <h2>Are you sure you want delete <span
                            style="color: {{$status==\App\Models\Article::STATUS_ACTIVE?'#00ff00':'#ff0000'}}">{{$title}}</span>
                        article?</h2>
                    <form wire:submit.prevent="destroy" id="kt_modal_edit_card" class="form">
                        <!--begin::Modal body--> <!--begin::Modal footer-->
                        <div class="modal-footer flex-center">
                            <!--begin::Button-->
                            <button type="submit" wire:target="destroy" :disabled="$disabled"
                                    class="btn btn-danger">
                                <span class="indicator-label">Yes</span>
                                <span class="indicator-progress">Please wait...
                                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <!--end::Button-->
                        </div>
                        <!--end::Modal footer-->
                    </form>
                    <!--end::Modal title-->
                </div>
                <!--end::Modal header-->
                <!--begin::Form-->

                <!--end::Form-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>

</main>

@push('scripts_livewire')
    <script>
        window.addEventListener(`close-modal`, event => {
            $('#create_article').modal('hide');
            $('#edit_article').modal('hide');
            $('#delete_article').modal('hide');
        });
    </script>
@endpush
