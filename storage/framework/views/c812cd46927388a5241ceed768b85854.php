<section id="contact" class="py-24 border-t border-border-soft bg-bg-dark relative overflow-hidden">

    <!-- Lueur d'ambiance cyber -->
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-accent/5 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">

        <!-- Header de section -->
        <div class="mb-16">
            <p class="font-mono text-accent text-sm uppercase tracking-wider mb-2">// 06. INITIATE CONNECTION</p>
            <h2 class="text-3xl md:text-4xl font-bold text-white tracking-tight">Discutons de votre projet</h2>
            <p class="text-gray-400 text-sm mt-3 max-w-xl">
                Besoin d'un audit de sécurité, d'un développement d'application web ou d'une consultation ? Envoyez un
                message sécurisé.
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-start">

            <!-- Informations de contact (Style Terminal / Encadré Rectangulaire) -->
            <div class="space-y-6">
                <div>
                    <h3 class="text-2xl font-bold text-white mb-3">Let's Talk</h3>
                    <p class="text-gray-400 leading-relaxed text-sm mb-6">
                        Que ce soit pour un audit OWASP, le développement d'une architecture web robuste sous
                        Laravel/React, ou une opportunité de collaboration - je reste joignable et réactif.
                    </p>
                </div>

                <dl class="font-mono text-sm space-y-4">
                    <!-- Card Email -->
                    <div
                        class="group flex items-center gap-4 border border-border-soft bg-bg-panel p-4 hover:border-accent transition-all duration-300">
                        <div
                            class="w-10 h-10 border border-border-soft group-hover:border-accent group-hover:bg-accent/10 flex items-center justify-center text-accent text-lg shrink-0 transition-all">
                            ✉
                        </div>
                        <div class="overflow-hidden">
                            <dt class="text-gray-500 text-[10px] uppercase tracking-wider">// Direct Mail</dt>
                            <dd class="text-gray-200 font-semibold group-hover:text-accent transition-colors truncate">
                                abdoumalickassouma804@gmail.com
                            </dd>
                        </div>
                    </div>

                    <!-- Card Téléphone -->
                    <div
                        class="group flex items-center gap-4 border border-border-soft bg-bg-panel p-4 hover:border-accent transition-all duration-300">
                        <div
                            class="w-10 h-10 border border-border-soft group-hover:border-accent group-hover:bg-accent/10 flex items-center justify-center text-accent text-lg shrink-0 transition-all">
                            ☎
                        </div>
                        <div>
                            <dt class="text-gray-500 text-[10px] uppercase tracking-wider">// Phone / WhatsApp</dt>
                            <dd class="text-gray-200 font-semibold group-hover:text-accent transition-colors">
                                +22995459313
                            </dd>
                        </div>
                    </div>

                    <!-- Card Localisation -->
                    <div
                        class="group flex items-center gap-4 border border-border-soft bg-bg-panel p-4 hover:border-accent transition-all duration-300">
                        <div
                            class="w-10 h-10 border border-border-soft group-hover:border-accent group-hover:bg-accent/10 flex items-center justify-center text-accent text-lg shrink-0 transition-all">
                            ⚑
                        </div>
                        <div>
                            <dt class="text-gray-500 text-[10px] uppercase tracking-wider">// Location</dt>
                            <dd class="text-gray-200 font-semibold group-hover:text-accent transition-colors">
                                Cotonou, Bénin 🇧🇯
                            </dd>
                        </div>
                    </div>
                </dl>

                <!-- Status Indicator -->
                <div
                    class="p-4 border border-border-soft bg-bg-panel/50 font-mono text-xs flex items-center justify-between">
                    <span class="text-gray-500">ENCRYPTION: 256-BIT SSL</span>
                    <span class="text-accent flex items-center gap-2">
                        <span class="w-2 h-2 bg-accent animate-ping rounded-full inline-block"></span>
                        ONLINE
                    </span>
                </div>
            </div>

            <!-- Formulaire de Contact Cyber (Champs Rectangulaires Strict) -->
            <div class="bg-bg-panel border border-border-soft p-8 relative">

                <!-- Décoration Terminal -->
                <div
                    class="flex items-center justify-between border-b border-border-soft/60 pb-4 mb-6 font-mono text-xs text-gray-500">
                    <span>// TRANSMIT_MESSAGE.SH</span>
                    <div class="flex gap-1">
                        <span class="w-2 h-2 bg-red-500/80 rounded-full"></span>
                        <span class="w-2 h-2 bg-yellow-500/80 rounded-full"></span>
                        <span class="w-2 h-2 bg-green-500/80 rounded-full"></span>
                    </div>
                </div>

                <!-- Message de succès Session Laravel -->
                <?php if(session('success')): ?>
                    <div
                        class="mb-6 border border-accent bg-accent/10 text-accent px-4 py-3 font-mono text-xs flex items-center gap-2">
                        <span class="font-bold">[SUCCESS]</span>
                        <span><?php echo e(session('success')); ?></span>
                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('contact.send')); ?>" method="POST" class="space-y-5">
                    <?php echo csrf_field(); ?>

                    <!-- Champ Nom -->
                    <div>
                        <label class="font-mono text-xs uppercase tracking-wider text-gray-400 mb-2 block">
                            Name <span class="text-accent">*</span>
                        </label>
                        <input type="text" name="name" value="<?php echo e(old('name')); ?>" required placeholder="John Doe"
                            class="w-full bg-bg-dark border border-border-soft px-4 py-3 text-gray-200 font-mono text-sm rounded-none focus:border-accent focus:outline-none transition-all placeholder:text-gray-600">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-400 font-mono text-[11px] mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Champ Email -->
                    <div>
                        <label class="font-mono text-xs uppercase tracking-wider text-gray-400 mb-2 block">
                            Email <span class="text-accent">*</span>
                        </label>
                        <input type="email" name="email" value="<?php echo e(old('email')); ?>" required
                            placeholder="john@example.com"
                            class="w-full bg-bg-dark border border-border-soft px-4 py-3 text-gray-200 font-mono text-sm rounded-none focus:border-accent focus:outline-none transition-all placeholder:text-gray-600">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-400 font-mono text-[11px] mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Champ Message -->
                    <div>
                        <label class="font-mono text-xs uppercase tracking-wider text-gray-400 mb-2 block">
                            Payload / Message <span class="text-accent">*</span>
                        </label>
                        <textarea name="message" rows="5" required placeholder="Décrivez brièvement votre besoin ou projet..."
                            class="w-full bg-bg-dark border border-border-soft px-4 py-3 text-gray-200 font-mono text-sm rounded-none focus:border-accent focus:outline-none transition-all resize-none placeholder:text-gray-600"><?php echo e(old('message')); ?></textarea>
                        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p class="text-red-400 font-mono text-[11px] mt-1"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <!-- Bouton Submit Rectangulaire Net -->
                    <button type="submit"
                        class="w-full bg-accent text-bg-dark border border-accent px-6 py-4 font-mono text-sm font-semibold uppercase tracking-wider rounded-none hover:bg-transparent hover:text-accent transition-all duration-300 flex items-center justify-center gap-2 group">
                        <span>Send Message</span>
                        <span class="group-hover:translate-x-1 transition-transform">&rarr;</span>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>
<?php /**PATH /home/malick/Documents/Mes_Projets/portfolio-cyber/resources/views/sections/contact.blade.php ENDPATH**/ ?>