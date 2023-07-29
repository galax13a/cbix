<div>
    <div class="card mb-3 shadow">
        <div class="card-body">
            <h4 class="card-title bg-light rounded-3 shadow-sm">
                <i class="fas fa-database"></i>
                HostOne-Storage
            </h4>
            <p class="card-text">
                <strong>🐼 User:</strong> {{ $user->name }}
            </p>
            
            <p class="card-text">
                <strong><i class="far fa-images"></i> Total Images:</strong> {{ number_format($totalSizeMB, 2) }} {{ $sizeFormat }}
            </p>
            <div class="progress">
                <div class="progress-bar text-black p-2 @if ($usagePercentage > 100) bg-danger @else bg-warning @endif" role="progressbar" style="width: {{ $usagePercentage }}%;" aria-valuenow="{{ $usagePercentage }}" aria-valuemin="0" aria-valuemax="100">{{ number_format($usagePercentage, 2) }}%</div>
            </div>
            
            <p class="card-text shadow-sm p-1 rounded-2">
                <strong><i class="far fa-image"></i> Usage Storage:</strong> {{ number_format($usagePercentage, 2) }}%
            </p>
            @if ($usagePercentage > 100)
                <p class="card-text">
                    <strong>⚠️ Exceeded Storage Limit!</strong>
                    <a href="{{ route('upgrade-plan') }}" class="btn btn-primary">Upgrade to Pro Plan</a>
                </p>
                @else
                <h5>
                    <span class="badge p-2 bg-danger">
                        <i class="fas fa-unlock"></i> {{ $uploadPlan->name }} ({{ number_format($uploadPlan->megas, 0) }} MB)
                    </span>
                </h5>
                <p class="card-text">
                    <strong><i class="fas fa-trophy"></i> More Storage 
                    <a href="{{ route('upgrade-plan') }}" class="custom-link p-1 shadow-sm">👉Pro Plan</a>
                   </strong>                  
                </p>
            
            @endif
        </div>
    </div>
</div>
