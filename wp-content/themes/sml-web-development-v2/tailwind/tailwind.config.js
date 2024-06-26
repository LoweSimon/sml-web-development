// Set the Preflight flag based on the build target.
const includePreflight = 'editor' === process.env._TW_TARGET ? false : true;
import plugin from 'tailwindcss/plugin';

export const presets = [
	// Manage Tailwind Typography's configuration in a separate file.
	require('./tailwind-typography.config.js'),
];
export const content = [
	// Ensure changes to PHP files and `theme.json` trigger a rebuild.
	'./theme/**/*.php',
];
export const theme = {
	// Extend the default Tailwind theme.
	extend: {
		colors: {
			'primary-red': '#BF0000',
			'primary-red-opacity': '#BF000080',
			'background-grey': '#EEEEEE',
			'red-box': 'linear-gradient(142deg, #590000 -1.71%, #BF0000 49.15%, #590000 100%)',
			'header-box': 'rgba(98, 98, 98, 0.50)'
		},
	},
	container: {
		center: true,
		padding: {
			DEFAULT: '2rem',
			lg: '4rem',
		}
	},
	fontFamily: {
		display: 'Montserrat, sans-serif'
	},
};
export const corePlugins = {
	// Disable Preflight base styles in builds targeting the editor.
	preflight: includePreflight,
};
export const plugins = [
	// Add Tailwind Typography (via _tw fork).
	require('@_tw/typography'),

	// Extract colors and widths from `theme.json`.
	require('@_tw/themejson'),

	// Uncomment below to add additional first-party Tailwind plugins.
	// require('@tailwindcss/forms'),
	// require('@tailwindcss/aspect-ratio'),
	// require('@tailwindcss/container-queries'),
	plugin(function({ addComponents }) {
		addComponents({
			'.btn': {
				borderRadius: '1.875rem',
				padding: '1rem',
				backgroundColor: '#BF0000',
				color: '#fff',
				margin: '2rem 0',
				display: 'flex',
				width: '17rem',
				justifyContent: 'center',
				textTransform: 'uppercase',
				fontWeight: '700',
				'&:hover': {
					backgroundColor: '#fff',
					color: '#BF0000',
					border: '2px solid #BF0000'
				}
			},
			'.service-container': {
				width: '20rem',
				height: '22rem',
				backgroundColor: '#E3E3E3',
				borderRadius: '1.875rem',
				display: 'flex',
				
			}
		})
	})
];
