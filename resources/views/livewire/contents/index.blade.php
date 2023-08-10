<main>

    @if(count($contents)!=0)
        <div class="table-responsive">
            <!--begin::Table-->
            <table class="table align-middle gs-0 gy-5">
                <!--begin::Table head-->
                <thead>
                <tr>
                    <th class="p-0 w-20px" style="border: none">#</th>
                    <th class="p-0 w-50px" style="border: none">Content Title</th>
                    <th class="p-0 w-50px" style="border: none">Content Status</th>
                    <th class="p-0 w-50px" style="border: none">Content Type</th>
                    <th class="p-0 w-50px" style="border: none">Created At</th>
                    <th class="p-0 w-50px" style="border: none">Actions</th>
                </tr>
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody>
                @foreach($contents as $content)
                    <tr>
                        <th style="text-align: center">
                            <div class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                {{$loop->iteration}}
                            </div>
                        </th>
                        <td style="text-align: center">
                            <div style="text-align: start"
                                 class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                {{$content->title}}
                            </div>
                        </td>
                        <td style="text-align: center">
                            <div style="text-align: start"
                                 class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                {{$content->status==\App\Models\Article::STATUS_ACTIVE?'Active':'Inactive'}}
                            </div>
                        </td>
                        <td style="text-align: center">
                            <div style="text-align: start"
                                 class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                @if($content->type==\App\Models\Article::TYPE_ARTICLES)
                                    Articles
                                @elseif($content->type==\App\Models\Article::TYPE_ADVERTISEMENTS)
                                    Advertisement
                                @elseif($content->type==\App\Models\Article::TYPE_NEWS)
                                    News
                                @endif
                            </div>
                        </td>
                        <td style="text-align: center">
                            <div style="text-align: start"
                                 class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                {{$content->created_at}}
                            </div>
                        </td>
                        <td style="text-align: center">
                            <div style="display: flex;gap: 5px">
                                <div style="text-align: start" class="text-dark fw-bolder mb-1 fs-6">
                                    <button
                                        wire:click="viewContent({{ $content->id }})"
                                        class="btn btn-sm btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#view_content"
                                        role="button"><i style="padding: 0" class="bi bi-eye-fill"></i></button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <!--end::Table body-->
            </table>
            <!--end::Table-->
{{--            {{$contents->links()}}--}}


        </div>
    @else
        <div>There is No Contents Yet!</div>
    @endif

    <!--begin::Modal - Create Api Key-->
    <div wire:ignore.self class="modal fade" id="view_content" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header" id="kt_modal_create_api_key_header">
                    <!--begin::Modal title-->
                    <h2>Content | <span
                            style="color: {{$status==\App\Models\Article::STATUS_ACTIVE?'#00ff00':'#ff0000'}}">{{$view_content_title}}</span>
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
                <div class="table-responsive p-10">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-5">
                        <!--begin::Table head-->
                        <thead>
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
                                    Title:
                                </div>
                            </td>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    {{$view_content_title}}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    Content:
                                </div>
                            </td>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    {{$view_content_content}}
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
                                    {{$view_content_status==\App\Models\Article::STATUS_ACTIVE?'Active':'Inactive'}}
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    Type:
                                </div>
                            </td>
                            <td style="text-align: center">
                                <div style="text-align: start"
                                     class="text-dark fw-bolder text-hover-primary mb-1 fs-6">
                                    @if($view_content_type==\App\Models\Article::TYPE_ARTICLES)
                                        Articles
                                    @elseif($view_content_type==\App\Models\Article::TYPE_ADVERTISEMENTS)
                                        Advertisement
                                    @elseif($view_content_type==\App\Models\Article::TYPE_NEWS)
                                        News
                                    @endif
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
</main>
