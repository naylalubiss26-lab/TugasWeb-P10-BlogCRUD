@props(['type' => 'info'])
<p style="padding:12px; border-radius:6px; {{ $type === 'success' ? 'background:#dcfce7;color:#166534;' : 'background:#e0e7ff;color:#3730a3;' }}">{{ $slot }}</p>