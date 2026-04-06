<?php
/**
 * Template Name: Vault Page
 * Description: The Vault - exclusive digital library page template
 *
 * @package tim-wordpress
 */

// Define vault sections
$sections = array(
    array(
        'title' => 'Frameworks',
        'description' => 'Proprietary models and frameworks developed through years of working with executives and thought leaders.',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2" /><line x1="3" y1="9" x2="21" y2="9" /><line x1="9" y1="21" x2="9" y2="9" /></svg>'
    ),
    array(
        'title' => 'Training Library',
        'description' => 'Video trainings and workshops covering key topics in authentic communication and leadership.',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="23 7 16 12 23 17 23 7" /><rect x="1" y="5" width="15" height="14" rx="2" ry="2" /></svg>'
    ),
    array(
        'title' => 'Scripts & Templates',
        'description' => 'Ready-to-use scripts, email templates, and frameworks for common speaking and communication scenarios.',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" /><polyline points="14 2 14 8 20 8" /><line x1="16" y1="13" x2="8" y2="13" /><line x1="16" y1="17" x2="8" y2="17" /><polyline points="10 9 9 9 8 9" /></svg>'
    ),
    array(
        'title' => 'Community Resources',
        'description' => 'Exclusive resources from our community of leaders, including guest workshops and member contributions.',
        'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" /><circle cx="9" cy="7" r="4" /><path d="M23 21v-2a4 4 0 0 0-3-3.87" /><path d="M16 3.13a4 4 0 0 1 0 7.75" /></svg>'
    ),
);

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
    <section class="relative py-20 md:py-32 flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-[#1a1a4e] via-[#232360] to-[#1a1a4e]" />

        <!-- Decorative elements -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-[#d4952a]/10 rounded-full blur-[100px]" />
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-[#232360]/50 rounded-full blur-[120px]" />

        <!-- Floating particles -->
        <div class="absolute inset-0 overflow-hidden">
            <?php for ($i = 1; $i <= 15; $i++): ?>
                <div class="absolute w-2 h-2 bg-[#d4952a]/30 rounded-full animate-float"
                     style="left: <?php echo rand(0, 100); ?>%; top: <?php echo rand(0, 100); ?>%; animation-delay: <?php echo rand(0, 5); ?>s; animation-duration: <?php echo 6 + rand(0, 4); ?>s;">
                </div>
            <?php endfor; ?>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 text-center">
            <span class="inline-flex items-center gap-2 bg-[#d4952a]/10 border border-[#d4952a]/30 text-[#d4952a] text-xs font-bold tracking-[0.2em] uppercase px-4 py-2 rounded-full mb-8">
                <span class="w-2 h-2 bg-[#d4952a] rounded-full animate-pulse" />
                The Vault
            </span>

            <h1 class="font-serif text-4xl md:text-6xl text-[#faf8f5] mb-8 leading-tight">
                Your Exclusive Resource Library
            </h1>

            <div class="max-w-3xl mx-auto">
                <p class="text-[#faf8f5]/80 text-lg md:text-xl leading-relaxed mb-6">
                    The Vault is an exclusive digital library available to private clients and Mastermind members. It's a curated collection of frameworks, tools, trainings, and resources designed to accelerate your growth as a communicator and leader.
                </p>
                <p class="text-[#faf8f5]/80 text-lg md:text-xl leading-relaxed">
                    This is not a generic course library. Everything in The Vault has been developed through years of work with executives, thought leaders, and changemakers — and it's updated regularly with new content.
                </p>
            </div>
        </div>
    </section>

    <!-- Vault Sections -->
    <section class="py-24 md:py-32 bg-[#faf8f5] text-[#1a1a4e] relative overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-[#d4952a]/5 rounded-full blur-[120px]" />

        <div class="max-w-6xl mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <span class="inline-flex items-center gap-2 bg-[#d4952a]/10 border border-[#d4952a]/30 text-[#d4952a] text-xs font-bold tracking-[0.2em] uppercase px-4 py-2 rounded-full mb-6">
                    What's Inside
                </span>
                <h2 class="font-serif text-3xl md:text-5xl text-[#1a1a4e] mb-6">
                    Everything You Need to Lead with Authenticity
                </h2>
                <p class="text-[#1a1a4e]/70 text-lg max-w-2xl mx-auto">
                    Explore the four pillars of The Vault — each one designed to support different aspects of your development.
                </p>
            </div>

            <!-- Section Cards -->
            <div class="grid md:grid-cols-2 gap-8">
                <?php foreach ($sections as $section): ?>
                    <?php
                        set_query_var('section_title', $section['title']);
                        set_query_var('section_description', $section['description']);
                        set_query_var('section_icon', $section['icon']);
                        get_template_part('template-parts/vault-item');
                    ?>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Access Section -->
    <section class="py-24 md:py-32 bg-[#1a1a4e] text-[#faf8f5] relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#d4952a]/10 rounded-full blur-[120px]" />

        <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
            <span class="inline-flex items-center gap-2 bg-[#d4952a]/10 border border-[#d4952a]/30 text-[#d4952a] text-xs font-bold tracking-[0.2em] uppercase px-4 py-2 rounded-full mb-6">
                Exclusive Access
            </span>
            <h2 class="font-serif text-3xl md:text-5xl text-[#faf8f5] mb-6">
                Get Access to The Vault
            </h2>
            <p class="text-[#faf8f5]/70 text-lg leading-relaxed mb-10 max-w-2xl mx-auto">
                The Vault is available exclusively to private clients and Mastermind members. When you work with Joanna, you get lifetime access to this growing library of resources — including all future updates and additions.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo home_url('/apply/'); ?>"
                   class="inline-flex items-center justify-center gap-3 bg-[#d4952a] text-white text-sm uppercase tracking-widest px-8 py-4 rounded-full font-medium hover:bg-[#b37a1f] transition-colors duration-300">
                    Apply to Work With Joanna
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14" /><path d="m12 5 7 7-7 7" />
                    </svg>
                </a>
                <a href="<?php echo home_url('/community/'); ?>"
                   class="inline-flex items-center justify-center gap-3 border-2 border-[#faf8f5]/30 text-[#faf8f5] text-sm uppercase tracking-widest px-8 py-4 rounded-full font-medium hover:bg-[#faf8f5]/10 transition-colors duration-300">
                    Explore Community
                </a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
</body>
</html>
