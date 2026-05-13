# BRIEF PROJECT — BRM QUICK ACCESS PORTAL

## Project Overview
Membangun sebuah website internal berbasis Laravel dan Tailwind CSS yang berfungsi sebagai pusat quick access website rutin untuk Board Of Regional Management (BRM). Website ini bersifat sederhana, cepat diakses, tanpa login, dan fokus utama hanya sebagai centralized access portal untuk mempermudah akses website yang sering digunakan sehari-hari.

Target user:
- Board Of Regional Management (BRM)
- Kepala Bagian TI
- Staff terkait

Fokus utama project:
- Clean UI
- Simple navigation
- Fast access
- Responsive
- Corporate look

---

# Main Features

## 1. Sidebar Navigation
Sidebar hanya memiliki beberapa menu utama agar tetap sederhana dan mudah digunakan.

### Menu Sidebar:
- Dashboard
- Quick Access BRM
- AI Tools

---

# 2. Quick Access BRM
Halaman ini berisi daftar website rutin BRM yang datanya berasal dari file Excel existing.

Data yang ditampilkan:
- Nama aplikasi
- Deskripsi singkat
- Kategori
- Link website
- Icon/logo aplikasi
- Tombol buka website

Tampilan menggunakan:
- Grid card modern
- Search bar
- Filter kategori sederhana

Contoh kategori:
- Monitoring
- HR
- Procurement
- Learning
- Reporting
- Operational

---

# 3. AI Tools Quick Access
Halaman khusus untuk akses cepat ke website AI yang sering digunakan.

Contoh tools:
- ChatGPT
- Gemini
- Canva
- Claude
- Perplexity
- Gamma
- Notion AI
- Copilot

Setiap tools ditampilkan dalam bentuk card:
- Logo
- Nama tools
- Deskripsi singkat
- Tombol Open

---

# UI/UX Concept

## Design Style
Konsep desain:
- Modern corporate
- Clean minimal
- Dominan putih
- Accent hijau corporate
- Rounded card
- Soft shadow
- Responsive desktop dan mobile

---

# Layout Structure

## Navbar
Isi:
- Logo perusahaan
- Judul portal
- Jam realtime
- Dark mode toggle (optional)

---

## Sidebar
Fixed sidebar:
- Dashboard
- Quick Access BRM
- AI Tools

---

## Main Content
Isi halaman menyesuaikan menu sidebar.

---

# Dashboard Content
Dashboard sederhana berisi:
- Welcome section
- Shortcut aplikasi favorit
- Statistik sederhana:
  - Total aplikasi BRM
  - Total AI tools
- Recently opened website (optional localStorage)

---

# Recommended Tech Stack

## Backend
- Laravel 12
- MySQL

## Frontend
- Tailwind CSS
- Alpine.js

## Icons
- Heroicons atau Lucide Icons

---

# Database Structure

## Table: applications
Field:
- id
- name
- slug
- category
- description
- url
- icon
- type (brm / ai_tools)
- is_featured
- created_at
- updated_at

---

# Development Scope

## Current Scope
Fokus hanya:
- Landing/dashboard
- Sidebar navigation
- Quick access website BRM
- Quick access AI tools
- Search aplikasi
- Responsive UI

Tidak perlu:
- AI recommendation
- Machine learning
- Analytics
- Notification system
- Complex admin system
- Multi-role authentication

---

# Optional Future Development
Jika nanti diperlukan:
- Admin panel CRUD
- Import Excel otomatis
- Favorite apps
- Website status monitoring
- SSO internal perusahaan

Namun untuk versi awal project, fokus tetap sederhana dan stabil.

---

# UI Components Needed

## Components:
- Sidebar
- Navbar
- Search bar
- App card
- Category badge
- Empty state
- Responsive mobile menu

---

# Folder Structure Recommendation

resources/views/
├── dashboard.blade.php
├── brm-access.blade.php
├── ai-tools.blade.php
├── layouts/
├── components/

---

# User Flow

## Flow:
1. User membuka portal
2. User memilih menu sidebar
3. User mencari aplikasi
4. User klik card aplikasi
5. Redirect ke website tujuan

Flow harus cepat dan minim klik.

---

# Main Objective
Membuat portal internal yang menjadi pusat akses website rutin BRM dan AI tools agar penggunaan lebih efisien, rapi, modern, dan mudah digunakan oleh manajemen maupun staff terkait.