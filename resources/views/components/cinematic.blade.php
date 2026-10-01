<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Dragon Age Banner</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <link
    rel="preconnect"
    href="https://fonts.googleapis.com"
  />
  <link
    rel="preconnect"
    href="https://fonts.gstatic.com"
    crossorigin
  />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap"
    rel="stylesheet"
  />

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
        },
      },
    };
  </script>
</head>

<body class="m-0 min-h-screen bg-black font-sans text-white">

  <main class="mx-auto w-full max-w-[1280px] px-[32px] py-[13px]">

    <section
      class="relative h-[520px] w-full overflow-hidden rounded-[16px] bg-[#11141b]"
    >
      <!-- Background -->
      <img
        src="/img/cinematic.jpg"
        alt=""
        class="absolute inset-0 h-full w-full object-cover"
      />

      <!-- Dark overlay -->
      <div
        class="absolute inset-0 bg-black/20"
      ></div>

      <!-- Bottom dark gradient -->
      <div
        class="absolute inset-0 bg-[linear-gradient(0deg,rgba(8,10,15,0.96)_0%,rgba(8,10,15,0.72)_20%,rgba(8,10,15,0.18)_46%,rgba(8,10,15,0.04)_100%)]"
      ></div>

      <!-- slight side vignette -->
      <div
        class="absolute inset-0 bg-[linear-gradient(90deg,rgba(7,9,14,0.25)_0%,rgba(7,9,14,0)_20%,rgba(7,9,14,0)_80%,rgba(7,9,14,0.25)_100%)]"
      ></div>

      <!-- Quick verdict -->
      <div
        class="absolute bottom-[25px] left-[32px] flex h-[88px] w-[602px] items-center rounded-[13px] bg-[#2a2c33]/95 px-[16px]"
      >
        <!-- Score -->
        <div
          class="flex h-[56px] w-[56px] shrink-0 flex-col items-center justify-center rounded-[8px] bg-[#645642]"
        >
          <div class="text-[20px] font-[700] leading-[20px] text-[#f2b84c]">
            8.5
          </div>

          <div
            class="mt-[2px] text-[8px] font-[700] uppercase tracking-[0.4px] text-[#e9b75a]"
          >
            Nexus
          </div>
        </div>

        <!-- Text -->
        <div class="ml-[16px] min-w-0">
          <!-- Header -->
          <div class="flex items-center">
            <span
              class="text-[12px] font-[700] uppercase tracking-[0.35px] text-[#bea4f4]"
            >
              Быстрый вердикт
            </span>

            <span
              class="mx-[7px] h-[6px] w-[6px] rounded-full bg-[#56d7ef]"
            ></span>

            <span
              class="text-[12px] font-[500] text-[#b9b7c2]"
            >
              Рекомендовано
            </span>
          </div>

          <!-- Description -->
          <p
            class="mt-[4px] max-w-[480px] text-[14px] font-[400] leading-[19px] tracking-[-0.1px] text-[#e0dde5]"
          >
            Зрелищный экшен с великолепными спутниками, кинематографичным
            размахом, но упрощённым тактическим слоем.
          </p>
        </div>
      </div>
    </section>

  </main>

</body>
</html>