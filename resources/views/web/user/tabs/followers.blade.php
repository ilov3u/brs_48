<div class="well">
    <div class="tab-content">
        <div class="tab-pane fade in active" >
            <div class="row">
                @if($followers->count())
                    @foreach($followers as $user)
                        <div class="col col-md-3">
                            <div class="product-inner">
                                <div class="product-image-box">
                                    <a href="{{ action('Web\UserController@show', ['id' => $user->id]) }}"
                                        data-toggle="tooltip" title="Go to homepage's {{ $user->name }}">
                                        <img src="{{ $user->avatarPath() }}" class="fix-img">
                                    </a>
                                </div>
                                <div class="info-user">
                                    <h5>{{ $user->name }}</h5>
                                    <ul class="info-detail">
                                        <li>{{ $user->email }}</li>
                                    </ul>
                                    @if(auth()->check())
                                        @if($authUser->following->contains('id', $user->id))
                                            <a class="btn action-relationship-user btn-info action-relate"
                                                href="javascript:void(0)" data-id="{{ $user->id }}">
                                                {{ trans('common.text.following') }}
                                            </a>
                                        @else
                                            <a class="btn action-relationship-user btn-default action-relate"
                                                href="javascript:void(0)" data-id="{{ $user->id }}">
                                                {{ trans('common.text.follow') }}
                                            </a>
                                        @endif
                                    @else
                                        <a class="btn action-relationship-user btn-default" {{ modalLogin() }}
                                            href="javascript:void(0)">
                                            {{ trans('common.text.follow') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <!--END: Profile -->
                        </div>
                    @endforeach
                @else
                    <p class="text-center">{{ trans('common.noty.user.no_followers') }}</p>
                @endif
            </div>
            <div class="center">
                {{ $followers->links() }}
            </div>
        </div>
    </div>
</div>

