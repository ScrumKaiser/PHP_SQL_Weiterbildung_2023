<div class="ui fixed inverted menu">
    <div class="ui container">
        <a href="/" class="header item">Routing Laravel</a>
        <div class="ui simple dropdown item">
            Certificates <i class="dropdown icon"></i>
            <div class="menu">
                <a href="/certificates/create" class="item">Zertifikat erstellen</a>
                <a href="/certificatesNameList" class="item">Namensliste</a>
                <a href="/certificatesUsersList" class="item">Hübschere Namensliste</a>
            </div>
        </div>
        <div class="ui simple dropdown item">
            Interests, Posts & Articles <i class="dropdown icon"></i>
            <div class="menu">
                <div class="header">Interests</div>
                <a href="/interests" class="item">Alle Interests anzeigen</a>
                <a href="/interests/store/Test" class="item">Interest hinzufügen</a>
                <a href="/interests/destroy/0" class="item">Interest löschen</a>
                <div class="divider"></div>
                <div class="header">Posts</div>
                <a href="/posts/count" class="item">Gesamtanzahl der Posts</a>
                <a href="/posts/store/Donnerstag/Döner essen/2" class="item">Post hinzufügen</a>
                <a href="/posts/updateWithId" class="item">Posts updaten</a>
                <a href="/posts/showCreateDate/1" class="item">Erstellungsdatum anzeigen</a>
                <a href="/posts/sorted" class="item">Alle Posts sortiert</a>
                <a href="/posts/deleteEmptyPosts" class="item">Leere Posts löschen</a>
                <div class="divider"></div>
                <div class="header">Articles</div>
                <a href="/articles/softDelete/3" class="item">Article soft deleten</a>
                <a href="/articles" class="item">Alle Articles anzeigen</a>
                <div class="divider"></div>
                <div class="header">Datenbank</div>
                <a href="/interests/insertPostsAndInterests" class="item">Interests und Posts einfügen</a>
                <a href="/articles/fillDatabase" class="item">Articles einfügen</a>
            </div>
        </div>
    </div>
</div>
