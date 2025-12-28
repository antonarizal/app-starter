<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class GenerateModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:model {name : The name of the model} {--table= : The table name} {--primary= : The primary key} {--timestamps : Use timestamps}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a new Eloquent model with custom properties';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $tableName = $this->option('table') ?: Str::snake(Str::pluralStudly($name));
        $primaryKey = $this->option('primary') ?: 'id';
        $useTimestamps = $this->option('timestamps') ? 'true' : 'false';

        // Pastikan nama model memiliki namespace yang benar
        if (!Str::contains($name, '\\')) {
            $name = 'App\\Models\\' . $name;
        }

        $modelName = class_basename($name);
        $namespace = Str::beforeLast($name, '\\');

        // Buat direktori jika belum ada
        $directory = app_path('Models');
        if (!File::exists($directory)) {
            File::makeDirectory($directory, 0755, true);
        }

        $filePath = app_path('Models/' . $modelName . '.php');

        if (File::exists($filePath)) {
            if (!$this->confirm("Model {$modelName} already exists. Do you want to overwrite it?")) {
                $this->info('Model generation cancelled.');
                return;
            }
        }

        $stub = $this->generateStub($namespace, $modelName, $tableName, $primaryKey, $useTimestamps);

        File::put($filePath, $stub);

        $this->info("Model {$modelName} created successfully!");
        $this->line("File location: {$filePath}");
    }

    /**
     * Generate the model stub content.
     *
     * @param string $namespace
     * @param string $modelName
     * @param string $tableName
     * @param string $primaryKey
     * @param string $useTimestamps
     * @return string
     */
    protected function generateStub($namespace, $modelName, $tableName, $primaryKey, $useTimestamps)
    {
        return <<<EOT
<?php

namespace {$namespace};

use Illuminate\\Database\\Eloquent\\Model;

class {$modelName} extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected \$table = '{$tableName}';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected \$primaryKey = '{$primaryKey}';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public \$timestamps = {$useTimestamps};

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected \$guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected \$fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    // protected \$hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected \$casts = [];
}

EOT;
    }
}
