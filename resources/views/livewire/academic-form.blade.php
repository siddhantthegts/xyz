<div>

    @livewire('academic-form-mail')
    @if ($form_step == 1)
    <form wire:submit.prevent="submit_form1()" method="POST">
        <div class="title">
            Kick Start Your Academic Journey!
        </div>
        <div class="form-steps step-1 {{ $form_step == 1 ? 'active' : '' }}">
            <div class="steps-box">
                <div class="steps-bar">
                    <div class="steps-done" style="width: 50%;"></div>
                </div>
                <div class="steps">
                    <span class="current-step">1</span>
                    <span class="text">of</span>
                    <span class="total-steps">2</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-12">
                    <div class="input-field">
                        <input type="text" wire:model="name" name="name" placeholder="Name *"
                            class="@error('name') error-msg @enderror">
                        @error('name')<span class="error-msg">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="input-field">
                        <input type="email" wire:model="email" name="email" placeholder="Email *"
                            class="@error('email') error-msg @enderror">
                        @error('email')<span class="error-msg">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="input-field">
                        <input type="number" wire:model="mobile" name="mobile" placeholder="Contact Number *"
                            class="@error('mobile') error-msg @enderror" style="padding-left: 50px">
                        @error('mobile')<span class="error-msg">{{ $message }}</span>@enderror
                        <input type="hidden" name="country_phone" class="d-none" id="phone" >
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">

                    <div class="input-submit">
                        <input type="submit" value="NEXT">
                        {{-- <input type="submit" wire:click="$set('form_step', 2)" value="NEXT"> --}}
                    </div>
                </div>
            </div>
        </div>
    </form>
    @elseif($form_step == 2)
    <form>
        <div class="title">
            Kick Start Your Academic Journey!
        </div>
        <div class="form-steps step-2 {{ $form_step == 2 ? 'active' : '' }}">
            <div class="steps-box">
                <div class="steps-bar">
                    <div class="steps-done" style="width: 100%;"></div>
                </div>
                <div class="steps">
                    <span class="current-step">2</span>
                    <span class="text">of</span>
                    <span class="total-steps">2</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-12">
                    <div class="input-field">
                        <input type="text" name="country" wire:model="country"
                            placeholder="Country you're applying for *">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="input-field">
                        <input type="text" name="university" wire:model="university"
                            placeholder="University you're applying for *">
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="input-field">
                        <input type="text" name="course" wire:model="course" placeholder="Course you're applying for *">
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">
                    <div class="input-field file">
                        <input type="file" name="file" wire:model="file" id="attachment">
                        {{-- <input class="d-none" name="file" wire:model="file" type="file" id="attachment">
                        <label for="attachment">
                            <p></p>
                            <span>Upload Details</span>
                        </label> --}}
                    </div>
                </div>
                <div class="col-md-6 col-xl-12">
                    <div class="input-field">
                        <input type="text" name="experience" wire:model="experience" placeholder="Experience Level *">
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">
                    <div class="input-field">
                        <textarea rows="2" name="requirement" wire:model="requirement"
                            placeholder="Kindly mention your SOP requirement"></textarea>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-xl-12">
                    <div class="input-field">
                        <input type="text" name="ex_level" wire:model="ex_level"
                            placeholder="Course you're applying for *">
                    </div>
                </div> --}}
                <div class="col-md-12 col-xl-12">
                    <div class="input-field terms">
                        <label>
                            <input wire:click="checkbox" name="checkbox" wire:model="checkbox" type="checkbox">
                            <div class="checkbox-btn">
                                <i class="fas fa-check"></i>
                            </div>
                            <p>
                                I agree with Privacy Policy and <a href="#term" target="_blank">Terms &amp;
                                    Conditions</a>
                            </p>
                        </label>
                    </div>
                </div>
                <div class="col-md-12 col-xl-12">
                    <div class="input-submit">
                        <div class="input-submit">
                            <input type="button" wire:click="submit_form2()" value="SUBMIT NOW" class="{{ $disabled }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endif
</div>
