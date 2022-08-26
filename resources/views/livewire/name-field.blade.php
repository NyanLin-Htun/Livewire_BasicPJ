<div class="flex flex-col mb-5">
    <label
      for="name"
      class="mb-1 text-xs tracking-wide text-gray-600"
      >Name:</label
    >
    <div class="relative">
      <div
        class="
          inline-flex
          items-center
          justify-center
          absolute
          left-0
          top-0
          h-full
          w-10
          text-gray-400
        "
      >
      <i class="fas fa-signature text-blue-500"></i>
      </div>

      <input
        wire:model.deffer = "name"
        id="name"
        type="name"
        name="name"
        class="
          text-sm
          placeholder-gray-500
          pl-10
          pr-4
          rounded-2xl
          border border-gray-400
          w-full
          py-2
          focus:outline-none focus:border-blue-400
        "
        placeholder="Enter your name..."
      />
    </div>
  </div>
