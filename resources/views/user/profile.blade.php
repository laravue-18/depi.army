@extends('layouts.user')

@section('content')
    <!-- admin content -->
    <div class="admin-content">
        <h2>Profile</h2>
        <div class="profile-edit-box">
            <div class="profile-input">
                <label>Profile Name</label>
                <input id="input-box" type="text" />
                <div class="tooltip-box">
                    <p>This should be the wallet address you want to whitelist for mint</p>
                </div>
            </div>
            <div class="profile-input">
                <label>Wallet Address</label>
                <input id="input-box" type="text" />

                <div class="tooltip-box">
                    <p>This should be the wallet address you want to whitelist for mint</p>
                </div>
            </div>
            <div class="profile-input">
                <label>Email</label>
                <input id="input-box" type="text" />

                <div class="tooltip-box">
                    <p>This should be the wallet address you want to whitelist for mint</p>
                </div>
            </div>
            <div class="profile-input">
                <label>Twitter</label>
                <input id="input-box" type="text" />

                <div class="tooltip-box">
                    <p>This should be the wallet address you want to whitelist for mint</p>
                </div>
            </div>
            <div class="profile-input">
                <label>Instragram</label>
                <input id="input-box" type="text" />

                <div class="tooltip-box">
                    <p>This should be the wallet address you want to whitelist for mint</p>
                </div>
            </div>
            <button>Update</button>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const tooltip = document.querySelectorAll('#input-box');
        tooltip.forEach((e) => {
            e.addEventListener('focus', () => {
                const tooltipBox = e.nextElementSibling;
                if (!tooltipBox.classList.contains('active')) {
                    tooltipBox.classList.add('active');
                }
            })
            e.addEventListener('blur', () => {
                const tooltipBox = e.nextElementSibling;
                if (tooltipBox.classList.contains('active')) {
                    tooltipBox.classList.remove('active');
                }
            })
        })
    </script>
@endpush
