@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('panel.register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.name') }}<span class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control @error('name') is-invalid @enderror"
                                    name="name"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.name_hurigana') }}</label>
                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control @error('name_hurigana') is-invalid @enderror"
                                    name="name_hurigana"
                                    value="{{ old('name_hurigana') }}">
                                @error('name_hurigana')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.email') }}<span class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control @error('email') is-invalid @enderror"
                                    name="email"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.password') }}<span class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    name="password"
                                    value="{{ old('password') }}">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.password_confirm') }}<span class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation"
                                    value="{{ old('password_confirmation') }}">
                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.tel') }}</label>
                            <div class="col-md-6">
                                <input type="tel"
                                    class="form-control @error('tel') is-invalid @enderror"
                                    name="tel"
                                    value="{{ old('tel') }}"
                                    placeholder="{{ __('panel.only_num') }}">
                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.birthday') }}<span class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="date"
                                    class="form-control @error('birthday') is-invalid @enderror"
                                    name="birthday"
                                    value="{{ old('birthday') }}">
                                @error('birthday')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.gender') }}<span class="required">*</span></label>
                            <div class="col-md-6">
                            <select name="gender" class="form-control @error('gender') is-invalid @enderror">
                                <option value="">{{ __('panel.select_box') }}</option>
                                <option value="{{ \App\Models\ConstantModel::GENDER['MALE'] }}" @if(old('gender') == \App\Models\ConstantModel::GENDER['MALE']) selected @endif>{{ __('panel.male') }}</option>
                                <option value="{{ \App\Models\ConstantModel::GENDER['FEMALE'] }}" @if(old('gender') == \App\Models\ConstantModel::GENDER['FEMALE']) selected @endif>{{ __('panel.female') }}</option>
                                <option value="{{ \App\Models\ConstantModel::GENDER['NON_BINARY'] }}" @if(old('gender') == \App\Models\ConstantModel::GENDER['NON_BINARY']) selected @endif>{{ __('panel.non_binary') }}</option>
                            </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.post_code') }}</label>
                            <div class="col-md-6">
                                <input type="tel"
                                    class="form-control @error('post_code') is-invalid @enderror"
                                    name="post_code"
                                    value="{{ old('post_code') }}"
                                    placeholder="{{ __('panel.only_num') }}">
                                @error('post_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.prefecture') }}<span class="required">*</span></label>
                            <div class="col-md-6">
                            <select name="prefecture_id" class="form-control @error('prefecture_id') is-invalid @enderror" >
                                <option value="">{{ __('panel.select_box') }}</option>
                                @foreach($prefectures as $prefecture)
                                    <option value="{{ $prefecture->id }}" @if(old('prefecture_id') == $prefecture->id) selected @endif>{{ $prefecture->name }}</option>
                                @endforeach
                            </select>
                                @error('prefecture_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.address') }}<span class="required">*</span></label>
                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control @error('address') is-invalid @enderror"
                                    name="address"
                                    value="{{ old('address') }}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">{{ __('panel.building') }}</label>
                            <div class="col-md-6">
                                <input type="text"
                                    class="form-control @error('building') is-invalid @enderror"
                                    name="building"
                                    value="{{ old('building') }}">
                                @error('building')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('panel.register_btn') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
