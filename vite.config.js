import { defineConfig } from 'vite';

export default defineConfig({
  resolve: {
    alias: {
      // Map PHP files to HTML files
      './index.php': './index.html',
      './add-book.php': './add-book.php',
      './add-events.php': './add-events.php',
      './edit-profile.php': './edit-profile.php',
      './in-memory.php': './in-memory.php',
      './liabrary.php': './liabrary.php',
      './poets.php': './poets.php',
      // Add more mappings as needed
    },
  },
});