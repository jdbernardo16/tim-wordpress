<?php

/**
 * Template Name: About Page
 * Description: About Joanna page template
 *
 * @package tim-wordpress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <?php get_header(); ?>

    <div class="overflow-x-hidden">
        <!-- Hero Section -->
        <section class="relative py-20 flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-[#1a1a4e] via-[#232360] to-[#1a1a4e]"></div>

            <!-- Decorative elements -->
            <div class="absolute top-20 left-10 w-72 h-72 bg-[#d4952a]/10 rounded-full blur-[100px]"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-[#232360]/50 rounded-full blur-[120px]"></div>

            <!-- Floating particles -->
            <div class="absolute inset-0 overflow-hidden">
                <?php for ($i = 1; $i <= 15; $i++): ?>
                    <div class="absolute w-2 h-2 bg-[#d4952a]/30 rounded-full animate-float"
                        style="left: <?php echo rand(0, 100); ?>%; top: <?php echo rand(0, 100); ?>%; animation-delay: <?php echo rand(0, 5); ?>s; animation-duration: <?php echo 6 + rand(0, 4); ?>s;">
                    </div>
                <?php endfor; ?>
            </div>

            <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
                <!-- Joanna's Image -->
                <div class="relative mb-12 inline-block">
                    <div class="absolute inset-0 bg-[#d4952a] blur-[60px] opacity-20 rounded-full"></div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joanna-hero.webp"
                        alt="Joanna Horton McPherson - Professional headshot showing confidence and warmth"
                        class="w-48 h-48 md:w-64 md:h-64 rounded-full object-cover relative z-10 border-4 border-[#d4952a]/30 shadow-2xl" />
                    <div class="absolute -bottom-4 -right-4 bg-[#d4952a] text-[#1a1a4e] px-4 py-2 rounded-lg shadow-lg z-20">
                        <span class="text-sm font-bold">Master Coach</span>
                    </div>
                </div>

                <span class="inline-flex items-center gap-2 bg-[#d4952a]/10 border border-[#d4952a]/30 text-[#d4952a] text-xs font-bold tracking-[0.2em] uppercase px-4 py-2 rounded-full mb-8">
                    About Joanna
                </span>

                <h1 class="font-serif text-4xl md:text-6xl text-[#faf8f5] mb-8 leading-tight">
                    She Trains Leaders to Speak.
                    <br />
                    <span class="text-[#d4952a]">And Speakers to Lead.</span>
                </h1>

                <div class="max-w-3xl mx-auto">
                    <p class="text-[#faf8f5]/80 text-lg md:text-xl leading-relaxed mb-6">
                        Joanna Horton McPherson is a Harvard-educated master coach, 6x founder, impact investor, and creator of the True Influence Method™️ — a signature process built over 30 years at the intersection of business, theater, education, and inner leadership.
                    </p>
                    <p class="text-[#faf8f5]/80 text-lg md:text-xl leading-relaxed">
                        She works with the most visionary founders, CEOs, and executives in the world — not to help them perform better, but to help them speak truer.
                    </p>
                </div>
            </div>
        </section>

        <!-- Her Story -->
        <section class="py-24 md:py-32 bg-[#faf8f5] text-[#1a1a4e] relative overflow-hidden">
            <div class="absolute top-0 right-0 w-96 h-96 bg-[#d4952a]/5 rounded-full blur-[120px]"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <div class="inline-flex items-center gap-2 bg-[#d4952a]/10 border border-[#d4952a]/30 text-[#d4952a] text-xs font-bold tracking-[0.2em] uppercase px-4 py-2 rounded-full mb-8">
                            Her Story
                        </div>

                        <h2 class="font-serif text-4xl md:text-5xl text-[#1a1a4e] mb-8 leading-tight">
                            It Started With a Question:
                            <span class="block text-[#d4952a] mt-2">
                                What If the Most Powerful Thing You Could Do Is Tell the Truth?
                            </span>
                        </h2>

                        <p class="text-[#1a1a4e]/80 text-lg md:text-xl leading-relaxed mb-6">
                            Joanna has spent a lifetime at the edges of transformation — in theatre, in classrooms, in boardrooms, in communities. As an actress, educator, entrepreneur, and investor, she learned that the leaders who create lasting impact are not the loudest or the most polished. They are the most honest.
                        </p>

                        <p class="text-[#1a1a4e]/80 text-lg md:text-xl leading-relaxed mb-8">
                            She created the True Influence Method™️ to give leaders a rigorous, human-centered process for doing exactly that. Through her signature interview-based approach, Joanna surfaces the truth beneath the noise — the defining moment, the real why, the lived experience that makes a message land.
                        </p>

                        <blockquote class="font-serif italic text-2xl text-[#d4952a] border-l-4 border-[#d4952a] pl-6 my-8">
                            The result is a voice that doesn't just communicate. It leads.
                        </blockquote>
                    </div>

                    <div class="relative">
                        <!-- Story Image -->
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/joanna2.webp"
                                alt="Joanna in action - Photo of Joanna speaking to a room or working one-on-one with a client"
                                class="w-full h-[600px] object-cover" />
                            <div class="absolute inset-0 bg-gradient-to-t from-[#1a1a4e]/70 to-transparent"></div>

                            <!-- Quote overlay -->
                            <div class="absolute bottom-0 left-0 right-0 p-8">
                                <div class="bg-[#faf8f5] p-6 rounded-xl backdrop-blur-sm">
                                    <p class="font-serif text-[#1a1a4e] text-lg italic">
                                        "The leaders who create lasting impact are not the loudest or the most polished. They are the most honest."
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -top-6 -left-6 bg-[#d4952a] text-[#1a1a4e] p-4 rounded-xl shadow-2xl">
                            <p class="font-serif text-2xl font-bold">30+</p>
                            <p class="text-xs font-medium">Years of Impact</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Credentials -->
        <section class="py-24 md:py-32 bg-gradient-to-br from-[#1a1a4e] via-[#232360] to-[#1a1a4e] relative overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <?php for ($i = 1; $i <= 20; $i++): ?>
                    <div class="absolute w-1 h-1 bg-[#d4952a]/20 rounded-full animate-float"
                        style="left: <?php echo rand(0, 100); ?>%; top: <?php echo rand(0, 100); ?>%; animation-delay: <?php echo rand(0, 5); ?>s; animation-duration: <?php echo 8 + rand(0, 4); ?>s;">
                    </div>
                <?php endfor; ?>
            </div>

            <div class="max-w-6xl mx-auto px-6 relative z-10">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 bg-[#d4952a]/10 border border-[#d4952a]/30 text-[#d4952a] text-xs font-bold tracking-[0.2em] uppercase px-4 py-2 rounded-full mb-8">
                        Background
                    </div>
                    <h2 class="font-serif text-4xl md:text-6xl text-[#faf8f5]">
                        A Lifetime of Excellence
                    </h2>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Credential 1 -->
                    <div class="group relative bg-[#faf8f5]/5 backdrop-blur-sm border border-[#d4952a]/10 rounded-2xl p-8 hover:border-[#d4952a]/30 transition-all hover:-translate-y-2">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-[#d4952a]/10 rounded-full blur-[40px]"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-[#d4952a]/10 rounded-xl flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#d4952a]">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                    <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                                </svg>
                            </div>
                            <h3 class="font-serif text-2xl text-[#faf8f5] mb-3">
                                Harvard Graduate
                            </h3>
                            <p class="text-[#faf8f5]/60">
                                World-class education
                            </p>
                        </div>
                    </div>

                    <!-- Credential 2 -->
                    <div class="group relative bg-[#faf8f5]/5 backdrop-blur-sm border border-[#d4952a]/10 rounded-2xl p-8 hover:border-[#d4952a]/30 transition-all hover:-translate-y-2">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-[#d4952a]/10 rounded-full blur-[40px]"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-[#d4952a]/10 rounded-xl flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#d4952a]">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"></path>
                                    <path d="M2 17l10 5 10-5"></path>
                                    <path d="M2 12l10 5 10-5"></path>
                                </svg>
                            </div>
                            <h3 class="font-serif text-2xl text-[#faf8f5] mb-3">
                                6x Founder
                            </h3>
                            <p class="text-[#faf8f5]/60">Impact Investor</p>
                        </div>
                    </div>

                    <!-- Credential 3 -->
                    <div class="group relative bg-[#faf8f5]/5 backdrop-blur-sm border border-[#d4952a]/10 rounded-2xl p-8 hover:border-[#d4952a]/30 transition-all hover:-translate-y-2">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-[#d4952a]/10 rounded-full blur-[40px]"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-[#d4952a]/10 rounded-xl flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#d4952a]">
                                    <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path>
                                    <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                                    <line x1="12" y1="19" x2="12" y2="23"></line>
                                    <line x1="8" y1="23" x2="16" y2="23"></line>
                                </svg>
                            </div>
                            <h3 class="font-serif text-2xl text-[#faf8f5] mb-3">
                                TEDx Speaker
                            </h3>
                            <p class="text-[#faf8f5]/60">
                                Global stage presence
                            </p>
                        </div>
                    </div>

                    <!-- Credential 4 -->
                    <div class="group relative bg-[#faf8f5]/5 backdrop-blur-sm border border-[#d4952a]/10 rounded-2xl p-8 hover:border-[#d4952a]/30 transition-all hover:-translate-y-2">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-[#d4952a]/10 rounded-full blur-[40px]"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-[#d4952a]/10 rounded-xl flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#d4952a]">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h3 class="font-serif text-2xl text-[#faf8f5] mb-3">
                                5,000+ Leaders
                            </h3>
                            <p class="text-[#faf8f5]/60">
                                Trained & Transformed
                            </p>
                        </div>
                    </div>

                    <!-- Credential 5 -->
                    <div class="group relative bg-[#faf8f5]/5 backdrop-blur-sm border border-[#d4952a]/10 rounded-2xl p-8 hover:border-[#d4952a]/30 transition-all hover:-translate-y-2">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-[#d4952a]/10 rounded-full blur-[40px]"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-[#d4952a]/10 rounded-xl flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#d4952a]">
                                    <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                    <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                                </svg>
                            </div>
                            <h3 class="font-serif text-2xl text-[#faf8f5] mb-3">
                                University Lecturer
                            </h3>
                            <p class="text-[#faf8f5]/60">Educator & Mentor</p>
                        </div>
                    </div>

                    <!-- Credential 6 -->
                    <div class="group relative bg-[#faf8f5]/5 backdrop-blur-sm border border-[#d4952a]/10 rounded-2xl p-8 hover:border-[#d4952a]/30 transition-all hover:-translate-y-2">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-[#d4952a]/10 rounded-full blur-[40px]"></div>
                        <div class="relative z-10">
                            <div class="w-16 h-16 bg-[#d4952a]/10 rounded-xl flex items-center justify-center mb-6">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-[#d4952a]">
                                    <circle cx="12" cy="8" r="7"></circle>
                                    <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                                </svg>
                            </div>
                            <h3 class="font-serif text-2xl text-[#faf8f5] mb-3">
                                Forbes Council
                            </h3>
                            <p class="text-[#faf8f5]/60">
                                Business Council Member
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Philosophy -->
        <section class="py-24 md:py-32 bg-[#faf8f5] text-[#1a1a4e] relative overflow-hidden">
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#232360]/10 rounded-full blur-[120px]"></div>

            <div class="max-w-6xl mx-auto px-6 relative z-10">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="relative">
                        <!-- Philosophy Image -->
                        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                            <img src="https://picsum.photos/600/600?random=3"
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

        <!-- About CTA -->
        <section class="py-24 md:py-32 bg-gradient-to-br from-[#1a1a4e] via-[#232360] to-[#1a1a4e] relative overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <div class="absolute w-2 h-2 bg-[#d4952a]/20 rounded-full animate-float"
                        style="left: <?php echo rand(0, 100); ?>%; top: <?php echo rand(0, 100); ?>%; animation-delay: <?php echo rand(0, 5); ?>s; animation-duration: <?php echo 7 + rand(0, 4); ?>s;">
                    </div>
                <?php endfor; ?>
            </div>

            <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
                <div class="mb-12">
                    <div class="relative inline-block">
                        <div class="absolute inset-0 bg-[#d4952a] blur-[60px] opacity-20 rounded-full"></div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icononly_transparent_nobuffer.png"
                            alt="Logo"
                            class="w-32 h-32 object-contain relative z-10" />
                    </div>
                </div>

                <h2 class="font-serif text-4xl md:text-6xl text-[#faf8f5] mb-6">
                    Ready to Find Your Voice?
                </h2>
                <p class="text-[#faf8f5]/80 text-lg md:text-xl mb-12 max-w-2xl mx-auto">
                    The first step is a conversation. Fill out Joanna's private client inquiry form and her team will be in touch to guide you toward the right path.
                </p>

                <a href="<?php echo home_url('/apply/'); ?>"
                    class="inline-flex items-center gap-3 px-10 py-5 bg-[#d4952a] hover:bg-[#e8a838] text-[#1a1a4e] font-semibold rounded-lg transition-all hover:shadow-xl hover:shadow-[#d4952a]/20 text-lg group">
                    Apply to Work With Joanna
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                        <polyline points="12 5 19 12 12 19"></polyline>
                    </svg>
                </a>
            </div>
        </section>
    </div>

    <?php get_footer(); ?>
</body>

</html>