<template>
  <div class="flex flex-col gap-2 items-center group">
    <svg :width="sizes[size]" :height="sizes[size]" class="inline-block">
      <use :xlink:href="`/assets/sprite.svg#${icon}`"></use>
    </svg>
    <p class="text-sm text-gray group-hover:text-secondary-light duration-500">
      {{ name }}
    </p>
  </div>
</template>

<script setup>

const sizes = {
  small: 36,
  medium: 52,
  large: 72
};

defineProps({
  name: {
    type: String,
    default: ''
  },
  icon: {
    type: String,
    default: ''
  },
  size: {
    type: String,
    default: 'medium'
  }
});
</script>