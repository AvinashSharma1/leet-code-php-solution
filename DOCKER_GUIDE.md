# Docker PHP LeetCode Project Guide

## One-Time Setup

1. **Build the Docker image (from project root):**
   ```sh
   docker build -t leetcode-php .
   ```

## Running Any PHP File (No Rebuild Needed for Code Changes)

- **PowerShell (recommended in VS Code):**
  ```sh
  docker run --rm -v "${PWD}:/app" -w /app leetcode-php php "217 Contains Duplicate/Solution1.php"
  docker run --rm -v "${PWD}:/app" -w /app leetcode-php php "217 Contains Duplicate/Solution2.php"
  ```

- **Command Prompt (cmd.exe):**
  ```cmd
  docker run --rm -v "%cd%:/app" -w /app leetcode-php php "217 Contains Duplicate/Solution1.php"
  docker run --rm -v "%cd%:/app" -w /app leetcode-php php "217 Contains Duplicate/Solution2.php"
  ```

- **You can run any PHP file in your project this way.**
- **No need to rebuild the Docker image for code changes.**

## Notes
- The Docker image uses PHP 7.4.33 by default. To use a different version, rebuild with:
  ```sh
  docker build --build-arg PHP_VERSION=8.4-rc -t leetcode-php .
  ```
- All code runs inside the `/app` directory in the container, mapped to your project folder.

---

**This setup gives you a flexible, global-like PHP CLI using Docker!**
