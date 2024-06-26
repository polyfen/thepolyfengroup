<section id="development-workflow">
    <h2 class="heading-1">11. Development Workflow</h2>
    <h3 class="heading-2"  id="website-project-set-up">11.1. Website Project Set-up</h3>
    <ol class="hanging-list">
        <li>Create Github repository</li>
        <li>Buy web domain</li>
        <li>Setup addon web domain to cPanel</li>
        <li>Direct web domain DNS to server</li>
        <li>Create FTP account</li>
        <li>Add CI/CD with Github Actions</li>
        <li>(Install WP)</li>
        <li>(Install WP THEME)</li>
        <li>(Create WP Child Theme)</li>
        <li>Create Cloudflare site</li>
        <li>Add Cloudflare purge with Github Actions</li>
        <li>Remove ".php" in .htaccess</li>
        <li>Create Google Analytics property</li>
        <li>Create GTM account</li>
        <li>Add Poly Cookies</li>
        <li>Create and add Favicon system</li>
    </ol>
    <h3 class="heading-2"  id="github-commits">11.2. Github Commits</h3>
    <ul class="hanging-list">
        <li><strong>add:</strong> Used when adding new features, functionalities, or content to the project.  <i>"add: contact form to the website."</i></li>
        <li><strong>fix:</strong> Employed when correcting bugs, errors, or issues within the project.  <i>"fix: alignment of accordion icons."</i></li>
        <li><strong>improve:</strong> Indicates enhancements or optimizations made to existing features or functionalities.  <i>"improve: loading speed of homepage images."</i></li>
        <li><strong>remove:</strong> Signifies the removal or deletion of features, functionalities, or content from the project.  <i>"remove: outdated card images."</i></li>
        <li><strong>hotfix:</strong> Reserved for urgent fixes deployed quickly to resolve critical issues in production.  <i>"hotfix"</i>.</li>
        <li><strong>Content Update:</strong> Used when making updates or revisions to the content of the project, such as text, images, or multimedia. <i>"content update"</i>.</li>
    </ul>

    <h3 class="heading-2"  id="changelog-update">11.3. ChangeLog Update</h3>
    <p>After completing a task, it's important to update the <a href="https://log.thepolyfengroup.com/" target="_blank" rel="dofollow">ChangeLog</a> with the implemented changes. This update should not include hotfixes or content updates.</p>

    <h3 class="heading-2" id="plkt-release-checklist">11.4.PLKT Release Checklist</h3>
    <h4 class="heading-3" id="release-checklist">11.4.1. Release Checklist</h4>
    <ul class="hanging-list">
        <li>Update version number in polykit.xyz hellobar</li>
        <li>Merge version branch with 'main'</li>
        <li>Update version number in CSS head script from affiliated sites (polykit.xyz and polyfen.com)</li>
        <li>Test version update in affiliated files and make necessary adjustments<</li>
        <li>Publish post in Changelog</li>
    </ul>
    <h4 class="heading-3" id="version-checklist">11.4.2. New Version Checklist</h4>
    <ul class="hanging-list">
        <li>Create new Git branch with version name</li>
        <li>Rename central SCSS file (app/scss/polykit-v#.scss) with new version number</li>
        <li>Update version number commented at the top of polykit-v#.scss (line 11)</li>
        <li>Update file name of polykit-v#.scss in gulpfile.js</li>
    </ul>

</section>