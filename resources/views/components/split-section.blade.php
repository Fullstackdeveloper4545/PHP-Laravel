<section class="mt-12" id="process-section">
  <div class="flex flex-col gap-6 lg:flex-row lg:items-stretch">

    <!-- LEFT IMAGE -->
    <div class="w-full overflow-hidden rounded-[16px] border border-[#1f2126] bg-[#111216] lg:w-1/2">
      <img
        src="{{ asset('Left.png') }}"
        alt="Feature preview"
        class="h-full w-full object-cover"
      />
    </div>

    <!-- RIGHT CONTENT -->
    <div class="relative w-full rounded-[16px] bg-[#121317] text-white lg:w-1/2">

      <!-- CENTERED CONTENT BLOCK -->
      <div class="absolute inset-0 flex items-center">
        <div class="px-12 py-14 max-w-[560px]">

          <!-- TAG -->
          <button class="rounded-full border border-white/20 bg-white/10 px-4 py-1 text-xs text-white/80">
            AI Process
          </button>

          <!-- HEADING -->
          <h3 class="mt-6 text-[52px] font-medium leading-[1.25] [font-family:'Montserrat',sans-serif]">
            Create <span class="text-white/70">freely on</span><br />
            canvas, <span class="text-white/70">including</span><br />
            in pixels, <span class="text-white/70">with a</span><br />
            responsive editor
          </h3>

          <!-- TIMELINE -->
          <div class="mt-10 flex gap-8">

            <div class="timeline-rail">
              <span class="timeline-fill" id="timeline-fill" style="height: 22%;"></span>
              <span class="timeline-dot is-active" data-step="1">01</span>
              <span class="timeline-dot" data-step="2">02</span>
              <span class="timeline-dot" data-step="3">03</span>
            </div>

            <div class="space-y-8">
              <div class="timeline-item" data-step="1">
                <p class="text-[20px] font-medium leading-[1.4] [font-family:'Montserrat',sans-serif]">
                  Give your design and marketing teams the power
                </p>
                <p class="mt-2 text-[15px] leading-[1.6] text-white/70 [font-family:'Montserrat',sans-serif]">
                  Create freely on canvas, including in pixels, with a responsive editor that optimizes designs
                  for every screen size.
                </p>
              </div>

              <div class="timeline-item" data-step="2">
                <p class="text-[18px] font-medium leading-[1.4] [font-family:'Montserrat',sans-serif]">
                  Design with dynamic content
                </p>
              </div>

              <div class="timeline-item" data-step="3">
                <p class="text-[18px] font-medium leading-[1.4] [font-family:'Montserrat',sans-serif]">
                  Programmatically deliver content at scale
                </p>
              </div>
            </div>

          </div>

        </div>
      </div>

    </div>
  </div>
</section>
