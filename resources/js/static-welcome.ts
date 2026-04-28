import { createApp, h } from 'vue';
import Welcome from '@/pages/Welcome.vue';
import { initializeTheme } from '@/composables/useAppearance';
import '../css/app.css';

const HeadStub = {
    name: 'Head',
    setup(_: unknown, { slots }: { slots: { default?: () => unknown } }) {
        return () => h('div', { style: 'display:none;' }, slots.default?.());
    },
};

createApp(Welcome).component('Head', HeadStub).mount('#app');

initializeTheme();
