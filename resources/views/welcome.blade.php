<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sardar IT</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
      /* Moving Neon Grid Background */
      .electric-grid {
        background-image:
          linear-gradient(#00ffff33 1px, transparent 1px),
          linear-gradient(90deg, #00ffff33 1px, transparent 1px);
        background-size: 40px 40px;
        animation: gridMove 12s linear infinite;
      }
      @keyframes gridMove {
        0% { transform: translate(0px, 0px); }
        100% { transform: translate(40px, 40px); }
      }

      /* Electricity flowing lines */
      .electric-lines::before,
      .electric-lines::after {
        content:"";
        position:absolute;
        width:120%;
        height:3px;
        background:linear-gradient(90deg, transparent, #00ffff, transparent);
        top:50%;
        left:-10%;
        animation: electricFlow 3s linear infinite;
        opacity:.4;
        filter:drop-shadow(0 0 6px #0ff);
      }
      .electric-lines::after {
        animation-delay:1.5s;
      }
      @keyframes electricFlow {
        0% { transform:translateX(-100%); }
        100% { transform:translateX(100%); }
      }

      /* Glow pulse */
      .glow {
        text-shadow:0 0 20px #00ffffaa, 0 0 40px #00ffff55;
      }
  </style>
</head>

<body class="bg-black text-white min-h-screen flex items-center justify-center relative overflow-hidden">

  <!-- Neon Grid Background -->
  <div class="electric-grid absolute inset-0 opacity-30"></div>

  <!-- Soft gradient glow -->
  <div class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-cyan-500/30 blur-[150px] rounded-full"></div>
  <div class="absolute -bottom-40 -right-40 w-[600px] h-[600px] bg-fuchsia-500/30 blur-[180px] rounded-full"></div>

  <!-- Electricity flow overlays -->
  <div class="electric-lines absolute inset-0 pointer-events-none"></div>

  <!-- Content -->
  <div class="relative z-10 text-center max-w-3xl px-6 animate-fadeIn">
      <h1 class="text-5xl md:text-6xl font-extrabold glow mb-4">
        <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 via-fuchsia-500 to-cyan-400">
            SARDAR IT
        </span>
      </h1>
      <p class="text-gray-300 text-xl md:text-2xl mb-10">
        Transforming Ideas into Digital Reality
      </p>

      <div class="flex flex-wrap justify-center gap-6">
        <a href="#"
          class="px-8 py-3 rounded-full font-semibold text-black bg-cyan-400 hover:bg-cyan-300 shadow-lg shadow-cyan-400/40 transition">
          Get Started
        </a>
        <a href="#"
          class="px-8 py-3 rounded-full font-semibold border border-cyan-400 text-cyan-300 hover:bg-cyan-400/10 transition">
          Learn More
        </a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
        <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-cyan-400 transition">
          <div class="text-4xl mb-3">⚡</div>
          <h3 class="text-cyan-400 font-semibold text-lg mb-2">Lightning Fast</h3>
          <p class="text-gray-400">Experience blazing-fast performance with cutting-edge solutions.</p>
        </div>

        <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-cyan-400 transition">
          <div class="text-4xl mb-3">🔒</div>
          <h3 class="text-cyan-400 font-semibold text-lg mb-2">Secure & Reliable</h3>
          <p class="text-gray-400">We keep your data protected with enterprise-grade security.</p>
        </div>

        <div class="p-6 rounded-xl bg-white/5 border border-white/10 hover:border-cyan-400 transition">
          <div class="text-4xl mb-3">🚀</div>
          <h3 class="text-cyan-400 font-semibold text-lg mb-2">Future Focused</h3>
          <p class="text-gray-400">Stay ahead of the curve with innovative tech.</p>
        </div>
      </div>
  </div>

</body>
</html>
