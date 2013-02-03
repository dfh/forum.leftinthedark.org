echo "Synching branch with remote server ..."
echo "  rsyncing to $remote_username@$remote_host:$remote_dir"

v_flag=""
dry_run_flag=""
if $V ; then
	v_flag="v"
fi
if $DRY_RUN ; then
	dry_run_flag="--dry-run"
fi

# a is for archive (recursion + preserve most things), z is for compress,
# --delete delete at destination, but not what was excluded from file in
# --exclude-from file ($TASK_remote_dir is the dir of this script)
rsync -az$v_flag $dry_run_flag --delete --exclude-from="$TASK_DIR/rsync_exclude" . $remote_username"@"$remote_host":"$remote_dir
