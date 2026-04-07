<?php

/**
 * About Philosophy section component.
 *
 * @package tim-wordpress
 */
?>

<section class="py-24 md:py-32 bg-[#faf8f5] text-[#1a1a4e] relative overflow-hidden">
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#232360]/10 rounded-full blur-[120px]"></div>

    <div class="max-w-6xl mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <!-- Philosophy Image -->
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/carousel/img5.webp"
                        alt="Joanna's Philosophy - Warm, thoughtful portrait showing depth and wisdom"
                        class="w-full h-[500px] object-cover" />
                    <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a4e]/60 to-transparent"></div>

                    <div class="absolute bottom-8 left-8 right-8">
                        <div class="bg-[#faf8f5]/95 backdrop-blur-sm p-6 rounded-xl">
                            <p class="font-serif text-[#1a1a4e] text-lg italic">
                                "Your story is not just where you've been. It's the reason people choose to follow you."
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="inline-flex items-center gap-2 bg-[#d4952a]/10 border border-[#d4952a]/30 text-[#d4952a] text-xs font-bold tracking-[0.2em] uppercase px-4 py-2 rounded-full mb-8">
                    Philosophy
                </div>

                <h2 class="font-serif text-4xl md:text-5xl text-[#1a1a4e] mb-8 leading-tight">
                    Your Story Is Not Just Where You've Been.
                    <span class="block text-[#d4952a] mt-2">
                        It's the Reason People Choose to Follow You.
                    </span>
                </h2>

                <p class="text-[#1a1a4e]/80 text-lg md:text-xl leading-relaxed mb-8">
                    Joanna believes that authentic communication is not a skill to be learned — it's a truth to be uncovered. Her work begins not with what you want to say, but with who you are and what you've lived. From that foundation, she helps leaders build a voice that is authoritative, emotionally resonant, and entirely their own.
                </p>

                <blockquote class="font-serif italic text-2xl text-[#d4952a] border-l-4 border-[#d4952a] pl-6 my-8">
                    "Being a voice for your work is not just good for sales. It's good for the soul."
                </blockquote>
                <p class="text-[#1a1a4e]/60 text-sm font-medium">
                    — Joanna Horton McPherson
                </p>
            </div>
        </div>
    </div>
</section>